//-----------------------------------------------------------------------
// Version:        2.1
// Template name:  Finapp - Wallet & Banking HTML Mobile Template
// Item URL :      https://themeforest.net/item/finapp-wallet-banking-html-mobile-template/25738217
// Author:         Bragher
// Author URL :    https://themeforest.net/user/bragher
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Template Settings
//-----------------------------------------------------------------------
const Finapp = {
    //-------------------------------------------------------------------
    // PWA Settings
    PWA: {
        enable: true, // Enable or disable PWA
    },
    //-------------------------------------------------------------------
    // Dark Mode Settings
    Dark_Mode: {
        default: false, // Set dark mode as main theme
        local_mode: { // Activate dark mode between certain times of the day
            enable: false, // Enable or disable local dark mode
            start_time: 20, // Start at 20:00
            end_time: 7, // End at 07:00
        },
        auto_detect: { // Auto detect user's preferences and activate dark mode
            enable: false,
        }
    },
    //-------------------------------------------------------------------
    // Right to Left (RTL) Settings
    RTL: {
        enable: false, // Enable or disable RTL Mode
    },
    //-------------------------------------------------------------------
    // Animations
    Animation: {
        goBack: false, // Go back page animation
    },
    //-------------------------------------------------------------------
    // Test Mode
    Test: {
        enable: true, // Enable or disable test mode
        word: "testmode", // The word that needs to be typed to activate test mode
        alert: true, // Enable or disable alert when test mode is activated
        alertMessage: "Test mode activated. Look at the developer console!" // Alert message
    }
    //-------------------------------------------------------------------
}
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Elements
//-----------------------------------------------------------------------
var pageBody = document.querySelector("body");
var appSidebar = document.getElementById("sidebarPanel")
var loader =  document.getElementById('loader');
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Service Workers
//-----------------------------------------------------------------------
if (Finapp.PWA.enable) {
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('__service-worker.js')
            .then(reg => console.log('service worker registered'))
            .catch(err => console.log('service worker not registered - there is an error.', err));
    }
}
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Page Loader with preload
//----------------------------------------------------------------------
setTimeout(() => {
    loader.setAttribute("style", "pointer-events: none; opacity: 0; transition: 0.2s ease-in-out;");
    setTimeout(() => {
        loader.setAttribute("style", "display: none;")
    }, 1000);
}, 450);
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Go Back Animation
function goBackAnimation() {
    pageBody.classList.add("animationGoBack")
    setTimeout(() => {
        window.history.go(-1);
    }, 300);
}
// Go Back Button
var goBackButton = document.querySelectorAll(".goBack");
goBackButton.forEach(function (el) {
    el.addEventListener("click", function () {
        if (Finapp.Animation.goBack) {
            goBackAnimation();
        }
        else {
            window.history.go(-1);
        }

    })
})
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// RTL (Right to Left)
if (Finapp.RTL.enable) {
    var pageHTML = document.querySelector("html")
    pageHTML.dir = "rtl"
    document.querySelector("body").classList.add("rtl-mode")
    if (appSidebar != null) {
        appSidebar.classList.remove("panelbox-left")
        appSidebar.classList.add("panelbox-right")
    }
    document.querySelectorAll(".carousel-full, .carousel-single, .carousel-multiple, .carousel-small, .carousel-slider").forEach(function (el) {
        el.setAttribute('data-splide', '{"direction":"rtl"}')
    })
}
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Fix for # href
//-----------------------------------------------------------------------
var aWithHref = document.querySelectorAll('a[href*="#"]');
aWithHref.forEach(function (el) {
    el.addEventListener("click", function (e) {
        e.preventDefault();
    })
});
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Input
// Clear input
var clearInput = document.querySelectorAll(".clear-input");
clearInput.forEach(function (el) {
    el.addEventListener("click", function () {
        var parent = this.parentElement
        var input = parent.querySelector(".form-control")
        input.focus();
        input.value = "";
        parent.classList.remove("not-empty");
    })
})
// active
var formControl = document.querySelectorAll(".form-group .form-control");
formControl.forEach(function (el) {
    // active
    el.addEventListener("focus", () => {
        var parent = el.parentElement
        parent.classList.add("active")
    });
    el.addEventListener("blur", () => {
        var parent = el.parentElement
        parent.classList.remove("active")
    });
    // empty check
    el.addEventListener("keyup", log);
    function log(e) {
        var inputCheck = this.value.length;
        if (inputCheck > 0) {
            this.parentElement.classList.add("not-empty")
        }
        else {
            this.parentElement.classList.remove("not-empty")
        }
    }
})
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Searchbox Toggle
var searchboxToggle = document.querySelectorAll(".toggle-searchbox")
searchboxToggle.forEach(function (el) {
    el.addEventListener("click", function () {
        var search = document.getElementById("search")
        var a = search.classList.contains("show")
        if (a) {
            search.classList.remove("show")
        }
        else {
            search.classList.add("show")
            search.querySelector(".form-control").focus();
        }
    })
});
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Carousel
// Splide Carousel
document.addEventListener('DOMContentLoaded', function () {

    // Full Carousel
    document.querySelectorAll('.carousel-full').forEach(carousel => new Splide(carousel, {
        perPage: 1,
        rewind: true,
        type: "loop",
        gap: 0,
        arrows: false,
        pagination: false,
    }).mount());

    // Single Carousel
    document.querySelectorAll('.carousel-single').forEach(carousel => new Splide(carousel, {
        perPage: 3,
        rewind: true,
        type: "loop",
        gap: 16,
        padding: 16,
        arrows: false,
        pagination: false,
        breakpoints: {
            768: {
                perPage: 1
            },
            991: {
                perPage: 2
            }
        }
    }).mount());

    // Multiple Carousel
    document.querySelectorAll('.carousel-multiple').forEach(carousel => new Splide(carousel, {
        perPage: 4,
        rewind: true,
        type: "loop",
        gap: 16,
        padding: 16,
        arrows: false,
        pagination: false,
        breakpoints: {
            768: {
                perPage: 2
            },
            991: {
                perPage: 3
            }
        }
    }).mount());

    // Small Carousel
    document.querySelectorAll('.carousel-small').forEach(carousel => new Splide(carousel, {
        perPage: 9,
        rewind: false,
        type: "loop",
        gap: 16,
        padding: 16,
        arrows: false,
        pagination: false,
        breakpoints: {
            768: {
                perPage: 4
            },
            991: {
                perPage: 7
            }
        }
    }).mount());

    // Slider Carousel
    document.querySelectorAll('.carousel-slider').forEach(carousel => new Splide(carousel, {
        perPage: 1,
        rewind: false,
        type: "loop",
        gap: 16,
        padding: 16,
        arrows: false,
        pagination: true
    }).mount());

    // Stories Carousel
    document.querySelectorAll('.story-block').forEach(carousel => new Splide(carousel, {
        perPage: 16,
        rewind: false,
        type: "slide",
        gap: 16,
        padding: 16,
        arrows: false,
        pagination: false,
        breakpoints: {
            500: {
                perPage: 4
            },
            768: {
                perPage: 7
            },
            1200: {
                perPage: 11
            }
        }
    }).mount());
});
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Upload Input
var uploadComponent = document.querySelectorAll('.custom-file-upload');
uploadComponent.forEach(function (el) {
    var fileUploadParent = '#' + el.id;
    var fileInput = document.querySelector(fileUploadParent + ' input[type="file"]')
    var fileLabel = document.querySelector(fileUploadParent + ' label')
    var fileLabelText = document.querySelector(fileUploadParent + ' label span')
    var filelabelDefault = fileLabelText.innerHTML;
    fileInput.addEventListener('change', function (event) {
        var name = this.value.split('\\').pop()
        tmppath = URL.createObjectURL(event.target.files[0]);
        if (name) {
            fileLabel.classList.add('file-uploaded');
            fileLabel.style.backgroundImage = "url(" + tmppath + ")";
            fileLabelText.innerHTML = name;
        }
        else {
            fileLabel.classList.remove("file-uploaded")
            fileLabelText.innerHTML = filelabelDefault;
        }
    })
})
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Notification
// trigger notification
var notificationCloseButton = document.querySelectorAll(".notification-box .close-button");
var notificationTaptoClose = document.querySelectorAll(".tap-to-close .notification-dialog");
var notificationBox = document.querySelectorAll(".notification-box");

function closeNotificationBox() {
    notificationBox.forEach(function (el) {
        el.classList.remove("show")
    })
}
function notification(target, time) {
    var a = document.getElementById(target);
    closeNotificationBox()
    setTimeout(() => {
        a.classList.add("show")
    }, 250);
    if (time) {
        time = time + 250;
        setTimeout(() => {
            closeNotificationBox()
        }, time);
    }
}
// close notification
notificationCloseButton.forEach(function (el) {
    el.addEventListener("click", function (e) {
        e.preventDefault();
        closeNotificationBox();
    })
});

// tap to close notification
notificationTaptoClose.forEach(function (el) {
    el.addEventListener("click", function (e) {
        closeNotificationBox();
    })
});
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Toast
// trigger toast
var toastCloseButton = document.querySelectorAll(".toast-box .close-button");
var toastTaptoClose = document.querySelectorAll(".toast-box.tap-to-close");
var toastBoxes = document.querySelectorAll(".toast-box");

function closeToastBox() {
    toastBoxes.forEach(function (el) {
        el.classList.remove("show")
    })
}
function toastbox(target, time) {
    var a = document.getElementById(target);
    closeToastBox()
    setTimeout(() => {
        a.classList.add("show")
    }, 100);
    if (time) {
        time = time + 100;
        setTimeout(() => {
            closeToastBox()
        }, time);
    }
}
// close button toast
toastCloseButton.forEach(function (el) {
    el.addEventListener("click", function (e) {
        e.preventDefault();
        closeToastBox();
    })
})
// tap to close toast
toastTaptoClose.forEach(function (el) {
    el.addEventListener("click", function (e) {
        closeToastBox();
    })
})
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Add to Home
var osDetection = navigator.userAgent || navigator.vendor || window.opera;
var windowsPhoneDetection = /windows phone/i.test(osDetection);
var androidDetection = /android/i.test(osDetection);
var iosDetection = /iPad|iPhone|iPod/.test(osDetection) && !window.MSStream;

function iosAddtoHome() {
    var modal = new bootstrap.Modal(document.getElementById('ios-add-to-home-screen'))
    modal.toggle()
}
function androidAddtoHome() {
    var modal = new bootstrap.Modal(document.getElementById('android-add-to-home-screen'))
    modal.toggle()
}
function AddtoHome(time, once) {
    if (once) {
        var AddHomeStatus = localStorage.getItem("FinappAddtoHome");
        if (AddHomeStatus === "1" || AddHomeStatus === 1) {
            // already showed up
        }
        else {
            localStorage.setItem("FinappAddtoHome", 1)
            window.addEventListener('load', () => {
                if (navigator.standalone) {
                    // if app installed ios home screen
                }
                else if (matchMedia('(display-mode: standalone)').matches) {
                    // if app installed android home screen
                }
                else {
                    // if app is not installed
                    if (androidDetection) {
                        setTimeout(() => {
                            androidAddtoHome()
                        }, time);
                    }
                    if (iosDetection) {
                        setTimeout(() => {
                            iosAddtoHome()
                        }, time);
                    }
                }
            });
        }
    }
    else {
        window.addEventListener('load', () => {
            if (navigator.standalone) {
                // app loaded to ios
            }
            else if (matchMedia('(display-mode: standalone)').matches) {
                // app loaded to android
            }
            else {
                // app not loaded
                if (androidDetection) {
                    setTimeout(() => {
                        androidAddtoHome()
                    }, time);
                }
                if (iosDetection) {
                    setTimeout(() => {
                        iosAddtoHome()
                    }, time);
                }
            }
        });
    }

}
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Dark Mode
var checkDarkModeStatus = localStorage.getItem("FinappDarkmode");
var switchDarkMode = document.querySelectorAll(".dark-mode-switch");
var pageBodyActive = pageBody.classList.contains("dark-mode");

// Check if enable as default
if (Finapp.Dark_Mode.default) {
    pageBody.classList.add("dark-mode");
}

// Local Dark Mode
if (Finapp.Dark_Mode.local_mode.enable) {
    var nightStart = Finapp.Dark_Mode.local_mode.start_time;
    var nightEnd = Finapp.Dark_Mode.local_mode.end_time;
    var currentDate = new Date();
    var currentHour = currentDate.getHours();
    if (currentHour >= nightStart || currentHour < nightEnd) {
        // It is night time
        pageBody.classList.add("dark-mode");
    }
}

// Auto Detect Dark Mode
if (Finapp.Dark_Mode.auto_detect.enable)
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        pageBody.classList.add("dark-mode");
    }

function switchDarkModeCheck(value) {
    switchDarkMode.forEach(function (el) {
        el.checked = value
    })
}
// if dark mode on
if (checkDarkModeStatus === 1 || checkDarkModeStatus === "1" || pageBody.classList.contains('dark-mode')) {
    switchDarkModeCheck(true);
    if (pageBodyActive) {
        // dark mode already activated
    }
    else {
        pageBody.classList.add("dark-mode")
    }
}
else {
    switchDarkModeCheck(false);
}
switchDarkMode.forEach(function (el) {
    el.addEventListener("click", function () {
        var darkmodeCheck = localStorage.getItem("FinappDarkmode");
        var bodyCheck = pageBody.classList.contains('dark-mode');
        if (darkmodeCheck === 1 || darkmodeCheck === "1" || bodyCheck) {
            pageBody.classList.remove("dark-mode");
            localStorage.setItem("FinappDarkmode", "0");
            switchDarkModeCheck(false);
        }
        else {
            pageBody.classList.add("dark-mode")
            switchDarkModeCheck(true);
            localStorage.setItem("FinappDarkmode", "1");
        }
    })
})
//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
// Test Mode
function testMode() {
    var colorDanger = "color: #FF396F; font-weight:bold;"
    var colorSuccess = "color: #1DCC70; font-weight:bold;"

    console.clear();
    console.log("%cFINAPP", "font-size: 1.3em; font-weight: bold; color: #FFF; background-color: #6236FF; padding: 10px 120px; margin-bottom: 16px;")
    console.log("%c🚀 TEST MODE ACTIVATED ..!", "font-size: 1em; font-weight: bold; margin: 4px 0;");

    function testModeMsg(value, msg) {
        if (value) {
            console.log("%c|" + "%c " + msg + " : " + "%cEnabled", "color: #444; font-size :1.2em; font-weight: bold;", "color: inherit", colorSuccess);
        }
        else if (value == false) {
            console.log("%c|" + "%c " + msg + " : " + "%cDisabled", "color: #444; font-size :1.2em; font-weight: bold;", "color: inherit", colorDanger);
        }
    }
    function testModeInfo(value, msg) {
        console.log("%c|" + "%c " + msg + " : " + "%c" + value, "color: #444; font-size :1.2em; font-weight: bold;", "color: inherit", "color:#6236FF; font-weight: bold;");
    }
    function testModeSubtitle(msg) {
        console.log("%c # " + msg, "color: #FFF; background: #444; font-size: 1.2em; padding: 8px 16px; margin-top: 16px; border-radius: 12px 12px 0 0");
    }

    testModeSubtitle("THEME SETTINGS")
    testModeMsg(Finapp.PWA.enable, "PWA")
    testModeMsg(Finapp.Dark_Mode.default, "Set dark mode as default theme")
    testModeMsg(Finapp.Dark_Mode.local_mode.enable, "Local dark mode (between " + Finapp.Dark_Mode.local_mode.start_time + ":00 and " + Finapp.Dark_Mode.local_mode.end_time + ":00)")
    testModeMsg(Finapp.Dark_Mode.auto_detect.enable, "Auto detect dark mode")
    testModeMsg(Finapp.RTL.enable, "RTL")
    testModeMsg(Finapp.Test.enable, "Test mode")
    testModeMsg(Finapp.Test.alert, "Test mode alert")

    testModeSubtitle("PREVIEW INFOS")
    // Resolution
    testModeInfo(window.screen.availWidth + " x " + window.screen.availHeight, "Resolution")
    // Device
    if (iosDetection) {
        testModeInfo("iOS", "Device")
    }
    else if (androidDetection) {
        testModeInfo("Android", "Device")
    }
    else if (windowsPhoneDetection) {
        testModeInfo("Windows Phone", "Device")
    }
    else {
        testModeInfo("Not a Mobile Device", "Device")
    }
    //Language
    testModeInfo(window.navigator.language, "Language")
    // Theme
    if (pageBody.classList.contains("dark-mode")) {
        testModeInfo("Dark Mode", "Current theme")
    }
    else {
        testModeInfo("Light Mode", "Current theme")
    }
    // Online Status
    if (window.navigator.onLine) {
        testModeInfo("Online", "Internet connection")
    }
    else {
        testModeInfo("Offline", "Internet connection")
    }

    testModeSubtitle("ANIMATIONS")
    testModeMsg(Finapp.Animation.goBack, "Go Back")
}
function themeTesting() {
    var word = Finapp.Test.word;
    var value = "";
    window.addEventListener('keypress', function (e) {
        value = value + String.fromCharCode(e.keyCode).toLowerCase();
        if (value.length > word.length) {
            value = value.slice(1);
        }
        if (value == word || value === word) {
            value = ""
            if (Finapp.Test.alert) {
                var content = document.getElementById("appCapsule")
                content.appendChild(document.createElement("div")).className = "test-alert-wrapper";
                var alert =
                    "<div id='alert-toast' class='toast-box toast-center tap-to-close'>"
                    +
                    "<div class='in'>"
                    +
                    "<div class='text'><h1 class='text-light mb-05'>🤖</h1><strong>"
                    +
                    Finapp.Test.alertMessage
                    +
                    "</strong></div></div></div>"
                var wrapper = document.querySelector(".test-alert-wrapper")
                wrapper.innerHTML = alert;
                toastbox('alert-toast');
                setTimeout(() => {
                    this.document.getElementById("alert-toast").classList.remove("show")
                }, 4000);
            }
            testMode();
        }

    })
}

if (Finapp.Test.enable) {
    themeTesting();
}
//-----------------------------------------------------------------------

console.clear();

function ready(fn) {
if (document.readyState === 'complete' || document.readyState === 'interactive') {
setTimeout(fn, 1);
document.removeEventListener('DOMContentLoaded', fn);
} else {
document.addEventListener('DOMContentLoaded', fn);
}
}

ready(function() {

// Global Constants

const progressForm = document.getElementById('progress-form');

const tabItems  = progressForm.querySelectorAll('[role="tab"]')
  , tabPanels = progressForm.querySelectorAll('[role="tabpanel"]');

let currentStep = 0;

// Form Validation

/*****************************************************************************
* Expects a string.
*
* Returns a boolean if the provided value *reasonably* matches the pattern
* of a US phone number. Optional extension number.
*/



/*****************************************************************************
* Expects a string.
*
* Returns a boolean if the provided value *reasonably* matches the pattern
* of a real email address.
*
* NOTE: There is no such thing as a perfect regular expression for email
*       addresses; further, the validity of an email address cannot be
*       verified on the front end. This is the closest we can get without
*       our own service or a service provided by a third party.
*
* RFC 5322 Official Standard: https://emailregex.com/
*/

const isValidEmail = val => {
const regex = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

return regex.test(val);
};

/*****************************************************************************
* Expects a Node (input[type="text"] or textarea).
*/

const validateText = field => {
const val = field.value.trim();

if (val === '' && field.required) {
  return {
    isValid: false
  };
} else {
  return {
    isValid: true
  };
}
};

/*****************************************************************************
* Expects a Node (select).
*/

const validateSelect = field => {
const val = field.value.trim();

if (val === '' && field.required) {
  return {
    isValid: false,
    message: 'Please select an option from the dropdown menu.'
  };
} else {
  return {
    isValid: true
  };
}
};

/*****************************************************************************
* Expects a Node (fieldset).
*/

const validateGroup = fieldset => {
const choices = fieldset.querySelectorAll('input[type="radio"], input[type="checkbox"]');

let isRequired = false
  , isChecked  = false;

for (const choice of choices) {
  if (choice.required) {
    isRequired = true;
  }

  if (choice.checked) {
    isChecked = true;
  }
}

if (!isChecked && isRequired) {
  return {
    isValid: false,
    message: 'Please make a selection.'
  };
} else {
  return {
    isValid: true
  };
}
};

/*****************************************************************************
* Expects a Node (input[type="radio"] or input[type="checkbox"]).
*/

const validateChoice = field => {
return validateGroup(field.closest('fieldset'));
};

/*****************************************************************************
* Expects a Node (input[type="tel"]).
*/



/*****************************************************************************
* Expects a Node (input[type="email"]).
*/

const validateEmail = field => {
const val = field.value.trim();

if (val === '' && field.required) {
  return {
    isValid: false
  };
} else if (val !== '' && !isValidEmail(val)) {
  return {
    isValid: false,
    message: 'Please provide a valid email address.'
  };
} else {
  return {
    isValid: true
  };
}
};

/*****************************************************************************
* Expects a Node (field or fieldset).
*
* Returns an object describing the field's overall validity, as well as
* a possible error message where additional information may be helpful for
* the user to complete the field.
*/

const getValidationData = field => {
switch (field.type) {
  case 'text':
  case 'textarea':
    return validateText(field);
  case 'select-one':
    return validateSelect(field);
  case 'fieldset':
    return validateGroup(field);
  case 'radio':
  case 'checkbox':
    return validateChoice(field);
  case 'tel':
    return validatePhone(field);
  case 'email':
    return validateEmail(field);
  default:
    throw new Error(`The provided field type '${field.tagName}:${field.type}' is not supported in this form.`);
}
};

/*****************************************************************************
* Expects a Node (field or fieldset).
*
* Returns the field's overall validity based on conditions set within
* `getValidationData()`.
*/

const isValid = field => {
return getValidationData(field).isValid;
};

/*****************************************************************************
* Expects an integer.
*
* Returns a promise that either resolves if all fields in a given step are
* valid, or rejects and returns invalid fields for further processing.
*/

const validateStep = currentStep => {
const fields = tabPanels[currentStep].querySelectorAll('fieldset, input:not([type="radio"]):not([type="checkbox"]), select, textarea');

const invalidFields = [...fields].filter(field => {
  return !isValid(field);
});

return new Promise((resolve, reject) => {
  if (invalidFields && !invalidFields.length) {
    resolve();
  } else {
    reject(invalidFields);
  }
});
};

// Form Error and Success

const FIELD_PARENT_CLASS = 'form__field'
  , FIELD_ERROR_CLASS  = 'form__error-text';

/*****************************************************************************
* Expects a Node (fieldset) that contains any number of radio or checkbox
* input elements, and a string representing the group's validation status.
*/

function updateChoice(fieldset, status, errorId = '') {
const choices = fieldset.querySelectorAll('[type="radio"], [type="checkbox"]');

for (const choice of choices) {
  if (status) {
    choice.setAttribute('aria-invalid', 'true');
    choice.setAttribute('aria-describedby', errorId);
  } else {
    choice.removeAttribute('aria-invalid');
    choice.removeAttribute('aria-describedby');
  }
}
}

/*****************************************************************************
* Expects a Node (field or fieldset) that either has the class name defined
* by `FIELD_PARENT_CLASS`, or has a parent with that class name. Optional
* string defines the error message.
*
* Builds and appends an error message to the parent element, or updates an
* existing error message.
*
* https://www.davidmacd.com/blog/test-aria-describedby-errormessage-aria-live.html
*/

function reportError(field, message = 'Please complete this required field.') {
const fieldParent = field.closest(`.${FIELD_PARENT_CLASS}`);

if (progressForm.contains(fieldParent)) {
  let fieldError   = fieldParent.querySelector(`.${FIELD_ERROR_CLASS}`)
    , fieldErrorId = '';

  if (!fieldParent.contains(fieldError)) {
    fieldError = document.createElement('p');

    if (field.matches('fieldset')) {
      fieldErrorId = `${field.id}__error`;

      updateChoice(field, true, fieldErrorId);
    } else if (field.matches('[type="radio"], [type="checkbox"]')) {
      fieldErrorId = `${field.closest('fieldset').id}__error`;

      updateChoice(field.closest('fieldset'), true, fieldErrorId);
    } else {
      fieldErrorId = `${field.id}__error`;

      field.setAttribute('aria-invalid', 'true');
      field.setAttribute('aria-describedby', fieldErrorId);
    }

    fieldError.id = fieldErrorId;
    fieldError.classList.add(FIELD_ERROR_CLASS);

    fieldParent.appendChild(fieldError);
  }

  fieldError.textContent = message;
}
}

/*****************************************************************************
* Expects a Node (field or fieldset) that either has the class name defined
* by `FIELD_PARENT_CLASS`, or has a parent with that class name.
*
* https://www.davidmacd.com/blog/test-aria-describedby-errormessage-aria-live.html
*/

function reportSuccess(field) {
const fieldParent = field.closest(`.${FIELD_PARENT_CLASS}`);

if (progressForm.contains(fieldParent)) {
  const fieldError = fieldParent.querySelector(`.${FIELD_ERROR_CLASS}`);

  if (fieldParent.contains(fieldError)) {
    if (field.matches('fieldset')) {
      updateChoice(field, false);
    } else if (field.matches('[type="radio"], [type="checkbox"]')) {
      updateChoice(field.closest('fieldset'), false);
    } else {
      field.removeAttribute('aria-invalid');
      field.removeAttribute('aria-describedby');
    }

    fieldParent.removeChild(fieldError);
  }
}
}

/*****************************************************************************
* Expects a Node (field or fieldset).
*
* Reports the field's overall validity to the user based on conditions set
* within `getValidationData()`.
*/

function reportValidity(field) {
const validation = getValidationData(field);

if (!validation.isValid && validation.message) {
  reportError(field, validation.message);
} else if (!validation.isValid) {
  reportError(field);
} else {
  reportSuccess(field);
}
}

// Form Progression

/*****************************************************************************
* Resets the state of all tabs and tab panels.
*/

function deactivateTabs() {
// Reset state of all tab items
tabItems.forEach(tab => {
  tab.setAttribute('aria-selected', 'false');
  tab.setAttribute('tabindex', '-1');
});

// Reset state of all panels
tabPanels.forEach(panel => {
  panel.setAttribute('hidden', '');
});
}

/*****************************************************************************
* Expects an integer.
*
* Shows the desired tab and its associated tab panel, then updates the form's
* current step to match the tab's index.
*/

function activateTab(index) {
const thisTab   = tabItems[index]
    , thisPanel = tabPanels[index];

// Close all other tabs
deactivateTabs();

// Focus the activated tab for accessibility
thisTab.focus();

// Set the interacted tab to active
thisTab.setAttribute('aria-selected', 'true');
thisTab.removeAttribute('tabindex');

// Display the associated tab panel
thisPanel.removeAttribute('hidden');

// Update the current step with the interacted tab's index value
currentStep = index;
}

/*****************************************************************************
* Expects an event from a click listener.
*/

function clickTab(e) {
activateTab([...tabItems].indexOf(e.currentTarget));
}

/*****************************************************************************
* Expects an event from a keydown listener.
*/

function arrowTab(e) {
const { keyCode, target } = e;

/**
 * If the current tab has an enabled next/previous sibling, activate it.
 * Otherwise, activate the tab at the beginning/end of the list.
 */

const targetPrev  = target.previousElementSibling
    , targetNext  = target.nextElementSibling
    , targetFirst = target.parentElement.firstElementChild
    , targetLast  = target.parentElement.lastElementChild;

const isDisabled = node => node.hasAttribute('aria-disabled');

switch (keyCode) {
  case 37: // Left arrow
    if (progressForm.contains(targetPrev) && !isDisabled(targetPrev)) {
      activateTab(currentStep - 1);
    } else if (!isDisabled(targetLast)) {
      activateTab(tabItems.length - 1);
    } break;
  case 39: // Right arrow
    if (progressForm.contains(targetNext) && !isDisabled(targetNext)) {
      activateTab(currentStep + 1);
    } else if (!isDisabled(targetFirst)) {
      activateTab(0);
    } break;
}
}

/*****************************************************************************
* Expects a boolean.
*
* Updates the visual state of the progress bar and makes the next tab
* available for interaction (if there is a next tab).
*/

// Immediately attach event listeners to the first tab (happens only once)
tabItems[0].addEventListener('click', clickTab);
tabItems[0].addEventListener('keydown', arrowTab);

function handleProgress(isComplete) {
const currentTab = tabItems[currentStep]
    , nextTab    = tabItems[currentStep + 1];

if (isComplete) {
  currentTab.setAttribute('data-complete', 'true');

  /**
   * Verify that there is, indeed, a next tab before modifying or listening
   * to it. In case we've reached the last item in the tablist.
   */

  if (progressForm.contains(nextTab)) {
    nextTab.removeAttribute('aria-disabled');

    nextTab.addEventListener('click', clickTab);
    nextTab.addEventListener('keydown', arrowTab);
  }

} else {
  currentTab.setAttribute('data-complete', 'false');
}
}

// Form Interactions

/*****************************************************************************
* Returns a function that only executes after a delay.
*
* https://davidwalsh.name/javascript-debounce-function
*/

const debounce = (fn, delay = 500) => {
let timeoutID;

return (...args) => {
  if (timeoutID) {
    clearTimeout(timeoutID);
  }

  timeoutID = setTimeout(() => {
    fn.apply(null, args);
    timeoutID = null;
  }, delay);
};
};

/*****************************************************************************
* Waits 0.5s before reacting to any input events. This reduces the frequency
* at which the listener is fired, making the errors less "noisy". Improves
* both performance and user experience.
*/

progressForm.addEventListener('input', debounce(e => {
const { target } = e;

validateStep(currentStep).then(() => {

  // Update the progress bar (step complete)
  handleProgress(true);

}).catch(() => {

  // Update the progress bar (step incomplete)
  handleProgress(false);

});

// Display or remove any error messages
reportValidity(target);
}));

/****************************************************************************/

progressForm.addEventListener('click', e => {
const { target } = e;

if (target.matches('[data-action="next"]')) {
  validateStep(currentStep).then(() => {

    // Update the progress bar (step complete)
    handleProgress(true);

    // Progress to the next step
    activateTab(currentStep + 1);

  }).catch(invalidFields => {

    // Update the progress bar (step incomplete)
    handleProgress(false);

    // Show errors for any invalid fields
    invalidFields.forEach(field => {
      reportValidity(field);
    });

    // Focus the first found invalid field for the user
    invalidFields[0].focus();

  });
}

if (target.matches('[data-action="prev"]')) {

  // Revisit the previous step
  activateTab(currentStep - 1);

}
});

// Form Submission

/*****************************************************************************
* Returns the user's IP address.
*/

async function getIP(url = 'https://api.ipify.org?format=json') {
const response = await fetch(url, {
  method: 'GET',
  headers: {
    'Content-Type': 'application/json'
  }
});

if (!response.ok) {
  throw new Error(response.statusText);
}

return response.json();
}

/*****************************************************************************
* POSTs to the specified endpoint.
*/

async function postData(url = '', data = {}) {
const response = await fetch(url, {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify(data)
});

if (!response.ok) {
  throw new Error(response.statusText);
}

return response.json();
}

/****************************************************************************/

function disableSubmit() {
const submitButton = progressForm.querySelector('[type="submit"]');

if (progressForm.contains(submitButton)) {

  // Update the state of the submit button
  submitButton.setAttribute('disabled', '');
  submitButton.textContent = 'Submitting...';

}
}

/****************************************************************************/

function handleSuccess(response) {
const thankYou = progressForm.querySelector('#progress-form__thank-you');

// Clear all HTML Nodes that are not the thank you panel
while (progressForm.firstElementChild !== thankYou) {
  progressForm.removeChild(progressForm.firstElementChild);
}

thankYou.removeAttribute('hidden');

// Logging the response from httpbin for quick verification
console.log(response);
}

/****************************************************************************/

function handleError(error) {
const submitButton = progressForm.querySelector('[type="submit"]');

if (progressForm.contains(submitButton)) {
  const errorText = document.createElement('p');

  // Reset the state of the submit button
  submitButton.removeAttribute('disabled');
  submitButton.textContent = 'Submit';

  // Display an error message for the user
  errorText.classList.add('m-0', 'form__error-text');
  errorText.textContent = `Sorry, your submission could not be processed.
    Please try again. If the issue persists, please contact our support
    team. Error message: ${error}`;

  submitButton.parentElement.prepend(errorText);
}
}

/****************************************************************************/

progressForm.addEventListener('submit', e => {

// Prevent the form from submitting
e.preventDefault();

// Get the API endpoint using the form action attribute
const form = e.currentTarget
    , API  = new URL(form.action);

validateStep(currentStep).then(() => {

  // Indicate that the submission is working
  disableSubmit();

  // Prepare the data
  const formData   = new FormData(form)
      , formTime   = new Date().getTime()
      , formFields = [];

  // Format the data entries
  for (const [name, value] of formData) {
    formFields.push({
      'name': name,
      'value': value
    });
  }

  // Get the user's IP address (for fun)
  // Build the final data structure, including the IP
  // POST the data and handle success or error
  getIP().then(response => {
    return {
      'fields': formFields,
      'meta': {
        'submittedAt': formTime,
        'ipAddress': response.ip
      }
    };
  })
  .then(data => postData(API, data))
  .then(response => {
    setTimeout(() => {
      handleSuccess(response)
    }, 5000); // An artificial delay to show the state of the submit button
  })
  .catch(error => {
    setTimeout(() => {
      handleError(error)
    }, 5000); // An artificial delay to show the state of the submit button
  });

}).catch(invalidFields => {

  // Show errors for any invalid fields
  invalidFields.forEach(field => {
    reportValidity(field);
  });

  // Focus the first found invalid field for the user
  invalidFields[0].focus();

});
});
});