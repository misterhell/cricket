let downloadBtn = '#download_button';
let installBtn = '#install_btn';
let redirectButton = '#redirect-to';
let loaderSelector = '.loading';
let deferredPrompt; // for future prompt
let dbName = 'TEST_DB'; // db name
let db; // indexdb
let isPWAInstalled = localStorage.getItem('pwaInstalled') === '1' || false;

let app = {
    hide: function (sel) {
        let el = document.querySelector(sel)
        el.style.display = 'none'
    },
    show: function (sel) {
        let el = document.querySelector(sel)
        el.style.display = 'block'
    },

    toggleToPWA: function () {
        this.hide(downloadBtn);
        this.hide(installBtn);
        this.show(redirectButton);
        this.setCookieParamsToRdrUrl();
    },

    toggleToSite: function () {
        // user visiting site with installed pwa
        if (isPWAInstalled) {
            this.toggleToPWA()
        } else {
            this.show(downloadBtn)
            this.hide(redirectButton)
        }
    },

    getCookies: function () {
        return document.cookie.split(";").reduce( (ac, cv, i) => Object.assign(ac, {[cv.split('=')[0]]: cv.split('=')[1]}), {});
    },

    setCookieParamsToRdrUrl: function () {
        var cookies = this.getCookies()
        var btn = document.querySelector(redirectButton)

        var href = btn.getAttribute('data-href')

        for (var i in cookies) {
            // sometimes facebook cookie has value with space " _fbc"
            var param = i.trim()

            if (param == '_fbc' || param == '_fbp') {
                param = param.replace('_', '')
            }

            // do not add param if string already contains
            if (href.indexOf((param + '=')) !== -1) {
                continue;
            }

            href += ('&' + param + '=' + cookies[i])
        }

        btn.setAttribute('data-href', href)
    },

    startLoader: function (finishCallback) {
        document.querySelector(loaderSelector).style.display = 'block'

        // additional fn not to use Math.ceil
        function round(num, decimalPlaces = 0) {
            var p = Math.pow(10, decimalPlaces);
            var n = (num * p) * (1 + Number.EPSILON);
            return Math.round(n) / p;
        }

        var time = 6;
        var iteration = 0;
        var maxWidth = document.querySelector('.progress_container').clientWidth; // width of progress
        var progress_graph = document.querySelector('.runner'); // runner in progress
        var progress_word = document.querySelector('.progress_word'); // words below progress
        var partialWidth = round(maxWidth / time, 2);
        var size = document.querySelector(downloadBtn).dataset.size // size in mb in params
        var sizeNum = Number(size.replace(",", ".").replace(/[^0-9&.]/g, '')); // extracting number
        var sizePartial = round(sizeNum / time, 2);

        var interval = setInterval(function () {
            progress_graph.style.width = partialWidth * iteration + 'px';
            progress_word.innerHTML = round(sizePartial * iteration, 2) + ' MB / ' + size;
            if (time <= iteration) {
                clearInterval(interval)
                finishCallback()
            }
            iteration++;
        }, 500)


    },

    askNotificationPermission: function () {
        OneSignal.showNativePrompt();
    },

    init: function () {
        window.addEventListener('beforeinstallprompt', (e) => {
            // Prevent Chrome 67 and earlier from automatically showing the prompt
            e.preventDefault();
            // Stash the event so it can be triggered later.
            deferredPrompt = e;
            isPWAInstalled = false;
        });

        window.addEventListener('appinstalled', () => {
            localStorage.setItem('pwaInstalled', '1');
            isPWAInstalled = true;
        });

        // install app by click on the button
        document.querySelector(downloadBtn)
            .addEventListener('click', function () {

                app.hide(downloadBtn)
                // start loading
                app.startLoader(function () {
                    app.hide(loaderSelector)
                    // on finish show play button
                    // add other code
                    app.show(installBtn)
                })

            });

        this.initClickRedirect();
        this.installSW();
        this.initDB();
        this.initPWAChecker();
        this.initInstallApp();
    },

    initInstallApp: function () {
        document.querySelector(installBtn).addEventListener('click', function () {
            var btn = document.querySelector(installBtn);
            btn.innerHTML = btn.dataset.installing_text;

            // Show the prompt
            deferredPrompt.prompt();
            // Wait for the user to respond to the prompt
            deferredPrompt.userChoice
                .then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        // positive choose
                    } else {
                        // negative
                        console.log('User dismissed the A2HS prompt');
                    }
                    deferredPrompt = null;
                    setTimeout(function () {
                        app.hide(installBtn)
                        app.show(redirectButton)
                        app.askNotificationPermission()
                    }, 10000)
                });
        })

    },

    initClickRedirect: function () {
        document.querySelector(redirectButton)
            .addEventListener('click', function () {
                // document.querySelector('#to-pwa').click();
                window.location = document.querySelector(redirectButton).dataset.href;
            })

        if (app.isPwaApp()) {
            this.setCookieParamsToRdrUrl();
            // console.log(document.querySelector(redirectButton).dataset.href)
            window.location = document.querySelector(redirectButton).dataset.href;
        }
    },

    pwaToggle: function (pwa) {
        if (pwa) {
            // show tracking button
            // make logic for adding to track url all from db
            // show install button
            app.toggleToPWA()
        } else {
            // show install button
            app.toggleToSite()
        }
    },

    isPwaApp: function () {
        // @see https://stackoverflow.com/a/40932368/8230309
        return (window.navigator.standalone === true) || (window.matchMedia('(display-mode: standalone)').matches);
    },

    initPWAChecker: function () {
        // STANDALONE PWA CHECKER EVENT

        app.pwaToggle(app.isPwaApp())

        // the same code but in listener to show redirect button right after install
        // because previous code works only for already installed app
        window
            .matchMedia('(display-mode: standalone)')
            .addEventListener('change', ({matches}) => {
                app.pwaToggle(matches)
            })
    },

    installSW: function () {
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function () {
                navigator.serviceWorker.register('/OneSignalSDKWorker.js').then(
                    function (registration) {
                        console.log('ServiceWorker registration successful with scope: ', registration.scope);
                    },
                    function (err) {
                        console.log('ServiceWorker registration failed: ', err);
                    });
            });
        }
    },

    initDB: function () {
        var request = self.indexedDB.open(dbName, 1, function () {

        });

        request.onsuccess = function (event) {
            db = event.target.result; // === request.result

            db.onversionchange = function () {
                db.close();
                alert("The database is out of date, please reload the page.")
            };
        };
        request.onerror = function () {
            console.log('[onerror]', request.error);
        };
        // check the existence of the specified database version, update as needed:
        request.onupgradeneeded = function () {
            // the version of the existing database is less than 2 (or the database does not exist)
            let db = request.result;

            if (!db.objectStoreNames.contains('params')) { // if the repository does not exist
                db.createObjectStore('params', {keyPath: 'id'}); // create storage
            }
        };
    },
    /**
     *
     * @param values
     */
    addParamsToDatabase: function (values) {
        if (db) {
            let transaction = db.transaction("params", "readwrite");
            // get an object store to work with
            let paramsStore = transaction.objectStore("params");

            values.forEach(function (val) {
                paramsStore.put(val)
            })
            transaction.commit()
        }
    }
}

app.init();


