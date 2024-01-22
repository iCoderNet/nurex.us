let mapLoad = document.querySelector(".map_load");
function controlLoad(isShow) {
    if (isShow) {
        mapLoad.classList.add("show_load");
    } else {
        mapLoad.classList.remove("show_load");

    }
}
let fromSelect = document.getElementById("from");
let dateInput = document.getElementById("date");
// let dateInput2 = document.getElementById("date2");
let sizeCarSelect = document.getElementById("size-car");
let nameInput = document.getElementById("name");
let phoneInput = document.getElementById("phone");
let emailInput = document.getElementById("email");
let toSelect = document.getElementById("to");
let states = document.querySelectorAll('.st0');
let routeForm = document.getElementById("route_form");
let continueBtn = document.querySelector(".continue_btn");
let csrfmiddlewaretoken = document.getElementsByName("csrfmiddlewaretoken")
let fromId = null;
let toId = null;
fromSelect.value = "";
fromSelect.addEventListener("change", (e) => fromFunc(e.target.value));
toSelect.addEventListener("change", (e) => toFunc(e.target.value));
function fromFunc(value) {
    states.forEach((state) => {
        if (state.id == value.split(", ")[0] || state.id == toId) {
            state.style.fill = "#003399";
            fromId = value.split(", ")[0];
        } else {
            state.style.fill = "transparent"
        }
    });
}

function toFunc(value) {
    states.forEach((state) => {
        if (state.id == value.split(", ")[0] || state.id == fromId) {
            state.style.fill = "#003399"
            toId = value.split(", ")[0]
        } else {
            state.style.fill = "transparent";
        }
    });
}

let data = [
    {
        "state": "Alabama",
        "code": "al",
    },
    {
        "state": "Alaska",
        "code": "ak",
    },
    {
        "state": "Arizona",
        "code": "az",
    },
    {
        "state": "Arkansas",
        "code": "ar",
    },
    {
        "state": "California",
        "code": "ca",
    },
    {
        "state": "Colorado",
        "code": "co",
    },
    {
        "state": "Connecticut",
        "code": "ct",
    },
    {
        "state": "Delaware",
        "code": "de",
    },
    {
        "state": "Florida",
        "code": "fl",
    },
    {
        "state": "Georgia",
        "code": "ga",
    },
    {
        "state": "Hawaii",
        "code": "hi",
    },
    {
        "state": "Idaho",
        "code": "id",
    },
    {
        "state": "Illinois",
        "code": "il",
    },
    {
        "state": "Indiana",
        "code": "in",
    },
    {
        "state": "Iowa",
        "code": "ia",
    },
    {
        "state": "Kansas",
        "code": "ks",
    },
    {
        "state": "Kentucky",
        "code": "ky",
    },
    {
        "state": "Louisiana",
        "code": "la",
    },
    {
        "state": "Maine",
        "code": "me",
    },
    {
        "state": "Maryland",
        "code": "md",
    },
    {
        "state": "Massachusetts",
        "code": "ma",
    },
    {
        "state": "Michigan",
        "code": "mi",
    },
    {
        "state": "Minnesota",
        "code": "mn",
    },
    {
        "state": "Mississippi",
        "code": "ms",
    },
    {
        "state": "Missouri",
        "code": "mo",
    },
    {
        "state": "Montana",
        "code": "mt",
    },
    {
        "state": "Nebraska",
        "code": "ne",
    },
    {
        "state": "Nevada",
        "code": "nv",
    },
    {
        "state": "New Hampshire",
        "code": "nh",
    },
    {
        "state": "New Jersey",
        "code": "nj",
    },
    {
        "state": "New Mexico",
        "code": "nm",
    },
    {
        "state": "New York",
        "code": "ny",
    },
    {
        "state": "North Carolina",
        "code": "nc",
    },
    {
        "state": "North Dakota",
        "code": "nd",
    },
    {
        "state": "Ohio",
        "code": "oh",
    },
    {
        "state": "Oklahoma",
        "code": "ok",
    },
    {
        "state": "Oregon",
        "code": "or",
    },
    {
        "state": "Pennsylvania",
        "code": "pa",
    },
    {
        "state": "Puerto Rico",
        "code": "pr",
    },
    {
        "state": "Rhode Island",
        "code": "ri",
    },
    {
        "state": "South Carolina",
        "code": "sc",
    },
    {
        "state": "South Dakota",
        "code": "sd",
    },
    {
        "state": "Tennessee",
        "code": "tn",
    },
    {
        "state": "Texas",
        "code": "tx",
    },
    {
        "state": "Utah",
        "code": "ut",
    },
    {
        "state": "Vermont",
        "code": "vt",
    },
    {
        "state": "Virginia",
        "code": "va",
    },
    {
        "state": "Washington",
        "code": "wa",
    },
    {
        "state": "West Virginia",
        "code": "wv",
    },
    {
        "state": "Wisconsin",
        "code": "wi",
    },
    {
        "state": "Wyoming",
        "code": "wy",
    }
]
data.map(state => {
    fromSelect.innerHTML += `<option value="${state.code.toUpperCase()}">${state.state}, ${state.code.toUpperCase()}</option>`;
    toSelect.innerHTML += `<option value="${state.code.toUpperCase()}">${state.state}, ${state.code.toUpperCase()}</option>`;
}
)
let filterOptions = (e) => {
    if (e.target.id == "to" && !e.target.value == " ") {
        document.querySelector(".to_placeholder").style.opacity = "0";
    } else if (e.target.id == "to" && e.target.value == " ") {
        document.querySelector(".to_placeholder").style.opacity = "1";
    }
    if (e.target.id == "from" && !e.target.value == " ") {
        document.querySelector(".from_placeholder").style.opacity = "0";
    } else if (e.target.id == "to" && e.target.value == " ") {
        document.querySelector(".from_placeholder").style.opacity = "1";
    }
    if (Boolean(+e.target.value[0]) || e.target.value == "") {
        e.target.parentNode.classList.add("wrong");
    } else {
        e.target.parentNode.classList.remove("wrong");
        e.target.parentNode.classList.remove("wrong_anim");
    }
}
function dateInputControl(e) {
    if (e.target.value == "") {
        e.target.parentNode.classList.add("wrong");
        e.target.parentNode.classList.remove("active");
    } else {
        e.target.parentNode.classList.remove("wrong");
        e.target.parentNode.classList.remove("wrong_anim");
    }
}
function dateInput2Control(e) {
    if (e.target.value == "") {
        e.target.parentNode.classList.add("wrong");
        e.target.parentNode.classList.remove("active");
    } else {
        e.target.parentNode.classList.remove("wrong");
        e.target.parentNode.classList.remove("wrong_anim");
    }
}
fromSelect.addEventListener('change', filterOptions);
toSelect.addEventListener('change', filterOptions);
sizeCarSelect.addEventListener('change', filterOptions);
dateInput.addEventListener('input', dateInputControl);
// dateInput2.addEventListener('input', dateInput2Control);
nameInput.addEventListener('input', dateInputControl);
phoneInput.addEventListener('input', dateInputControl);
emailInput.addEventListener('input', dateInputControl);

let sizeSelect = new TomSelect('#size-car', {
    render: {
        option: function (data, escape) {
            return `<div style=" padding: 8px 0; padding-bottom: 5px;  max-height: 68px; text-align: center;">
                <img style="width: 48px; margin-bottom: 8px" class=" mx-auto" src="${data.src}">
                <p style="font-weight: 200; font-size: 12px; opacity: 0.6; text-align: center; ">${data.text}</p>
            </div>`;
        },
        item: function (item, escape) {
            return `<div>${item.value}</div>`;
        }
    },
    closeAfterSelect: true
});

new TomSelect('#from', {
    render: {
        option: function (data, escape) {
            return `<div style=" padding: 8px; padding-bottom: 5px;  max-height: 68px; text-align: center;">
                
                <p style="font-weight: 200; font-size: 12px; opacity: 0.6; text-align: start; ">${data.text}</p>
            </div>`;
        },
        item: function (item, escape) {
            return `<div>${item.value}</div>`;
        }
    },
});
new TomSelect('#to', {
    render: {
        option: function (data, escape) {
            return `<div style=" padding: 8px; padding-bottom: 5px;  max-height: 68px; text-align: center;">
                
                <p style="font-weight: 200; font-size: 12px; opacity: 0.6; text-align: start; ">${data.text}</p>
            </div>`;
        },
        item: function (item, escape) {
            return `<div>${item.value}</div>`;
        }
    },
    closeAfterSelect: true
});
let finalModal1 = new bootstrap.Modal(document.getElementById('finalModal'));


continueBtn.addEventListener("click", changeForm);
let secondaryInputs = [nameInput, phoneInput, emailInput];
let primaryInputs = [dateInput, fromSelect, toSelect];
// primaryInputs.forEach((input) => {
//     input.addEventListener("focus", activeInput);
// });
// primaryInputs.forEach((input) => {
//     input.addEventListener("blur", inActiveInput);
// });
// secondaryInputs.forEach((input) => {
//     input.addEventListener("focus", activeInput);
// });
// secondaryInputs.forEach((input) => {
//     input.addEventListener("blur", inActiveInput);
// });
// function activeInput(e) {
//     console.log(e.target.parentNode);
//     e.target.parentNode.classList.add("active");
// }
// function inActiveInput(e) {
//     e.target.parentNode.classList.remove("active");
// }
function changeForm() {
    let firstCondition = Boolean(fromSelect.value) && Boolean(toSelect.value) && dateInput.value && sizeCarSelect.value;

    if (firstCondition) {
        routeForm.classList.add("secondary_form");
        continueBtn.innerHTML = "Sent";
    }
    if (fromSelect.value == " ") {
        fromSelect.parentNode.classList.add("wrong_anim");
    } else {
        fromSelect.parentNode.classList.remove("wrong_anim");
    }
    if (Boolean(+toSelect.value[0]) || toSelect.value == " ") {
        toSelect.parentNode.classList.add("wrong_anim");
    } else {
        toSelect.parentNode.classList.remove("wrong_anim");
    }
    if (!dateInput.value) {
        dateInput.parentNode.classList.add("wrong_anim");
    } else {
        dateInput.parentNode.classList.remove("wrong_anim");
    }
    if (!sizeCarSelect.value) {
        sizeCarSelect.parentNode.classList.add("wrong_anim");
    } else {
        sizeCarSelect.parentNode.classList.remove("wrong_anim");
    }
    secondaryInputs.forEach((input) => {
        if (!input.value) {
            input.parentNode.classList.add("wrong_anim");
        } else {
            input.parentNode.classList.remove("wrong_anim");
        }
    })

    if (firstCondition && nameInput.value && phoneInput.value && emailInput.value) {
        let fromData = {
            'csrfmiddlewaretoken': csrfmiddlewaretoken[0].value,
            'f': fromSelect.value,
            't': toSelect.value,
            'd':dateInput.value,
            'vehicle': sizeCarSelect.value,
            'name': nameInput.value,
            'phone': phoneInput.value,
            'email': emailInput.value,

        }
        $.ajax({
            data: fromData,
            type: 'POST',
            url: "/application",
            beforeSend: function() {
                controlLoad(true);
            },
            success: function (response) {
                    controlLoad(false);
                    finalModal1.show();
                },
              error: function (response) {
                  console.log(response.responseJSON.errors)
                  controlLoad(false);
              }
          });

        // primaryInputs.forEach((input) => {
        //     input.value = " ";
        // });
        secondaryInputs.forEach((input) => {
            input.value = "";
        });

        routeForm.classList.remove("secondary_form");
        // fromFunc("");
        // toFunc("");
        fromId = null;
        toId = null;
    }
}

flatpickr("#date", {});
flatpickr("#myID", {});
// flatpickr("#date2", {});

$(document).ready(function () {
          $('#contact_form').submit(function () {
              console.log('ajax submit');
              console.log($(this).serialize());
              $.ajax({
                  data: $(this).serialize(),
                  type: $(this).attr('method'),
                  url: "/contact-us",
                  beforeSend: function() {
                      controlLoad(true);
                  },
                  success: function (response) {
                      controlLoad(false);
                      let finalModal = new bootstrap.Modal(document.getElementById('finalModal1'));
                      finalModal.show();
                      document.getElementById("contact_form").reset();
                  },
                  error: function (response) {
                      controlLoad(false);
                  }
              });
              return false;
          });
      })
$(document).ready(function () {
          $('#modal_form').submit(function () {
              console.log($(this).serialize());
              $.ajax({
                  data: $(this).serialize(),
                  type: $(this).attr('method'),
                  url: "/subscribe",
                  beforeSend: function() {
                    controlLoad(true);
                  },
                  success: function (response) {
                      controlLoad(false);
                        let emailModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
                        emailModal.hide();
                        let finalModal = new bootstrap.Modal(document.getElementById('finalModal1'));
                        finalModal.show();
                  },
                  error: function (response) {
                      controlLoad(false);
                  }
              });
              return false;
          });
      })

function openUploadModal() {
    let uploadModal = new bootstrap.Modal(document.getElementById('uploadBackdrop'));
    uploadModal.show();
}