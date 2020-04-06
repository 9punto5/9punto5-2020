module.exports = {
    theme: {
        fill: theme => ({
            'indigo': theme('colors.n5_indigo'),
            'white': theme('colors.white'),
        }),
        extend: {
            colors: {
                n5_purple_lighter: '#5723AE',
                n5_purple_light: '#622AB9',
                n5_purple: '#5926B3',
                n5_purple_dark: '#431B9C',
                n5_indigo: '#00e5c8',
                n5_pink: '#ff3b67'
            }
        },
    },
    variants: {
        fill: ['responsive', 'hover', 'focus'],
    },
    plugins: [],
}
