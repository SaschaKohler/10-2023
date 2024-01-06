import preset from "../../../../vendor/filament/filament/tailwind.config.preset";

module.exports = {
    presets: [preset],
    content: [
        "./app/Filament/Company/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./resources/views/filament/components/company/**/*.blade.php",
        // "./resources/views/components/company/**/*.blade.php",
        // "./resources/views/invoices/**/*.blade.php",
        // "./resources/views/invoices/components/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                white: "#F6F5F3",
            },
        },
    },
};
