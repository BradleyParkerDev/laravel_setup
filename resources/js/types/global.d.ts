import type AlpineType from "alpinejs";
import type { AxiosInstance } from "axios";

declare global {
  interface Window {
    Alpine: typeof AlpineType;
    axios: AxiosInstance;
  }
}

export {};
