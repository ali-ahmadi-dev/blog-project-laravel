import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import "../vendor/bootstrap/dist/js/bootstrap.bundle.min";
// import "../vendor/tiny-slider/tiny-slider-rtl";
// import "../vendor/sticky-js/sticky.min.js";

import "./functions.js";
// Bootstrap JS

// import "../vendor/bootstrap/dist/js/bootstrap.bundle.min";

// import "./functions";

// import "./front/swiperSlideTrigger";

// import "./front/sidebarOffCanvasMain";

// import "./dark-theme";

// import "./common/successNotification";

import.meta.glob(["../assets/image/**"]);
