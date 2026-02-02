import "../../css/app.css";
import "./bootstrap";
import "htmx.org";
import Alpine from "alpinejs";
import uiStore from "./lib/uiStore.js";

Alpine.store("ui", uiStore());

window.Alpine = Alpine;

Alpine.start();
console.log("Hello, World!");
