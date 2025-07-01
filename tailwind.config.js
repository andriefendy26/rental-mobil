import preset from "./vendor/filament/support/tailwind.config.preset";

export default {
      darkMode: false, // ⛔ Nonaktifkan dark mode sepenuhnya
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    plugins: [require("daisyui")],
};
