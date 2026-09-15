import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import "../vendor/bootstrap/dist/js/bootstrap.bundle.min";
// import "../vendor/tiny-slider/tiny-slider-rtl";
// import "../vendor/sticky-js/sticky.min.js";

// Bootstrap JS
import "./functions";
// import "../vendor/bootstrap/dist/js/bootstrap.bundle.min";
import "./front/swiperSliderTrigger";
import "./front/sidebarOffCanvasMain";

// import "./dark-theme";

// import "./common/successNotification";

import.meta.glob(["../assets/image/**"]);
