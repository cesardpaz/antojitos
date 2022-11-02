/** @type {import('tailwindcss').Config} */
module.exports = {
    corePlugins: {
        container: false
    },
    content: [
        "home.php",
        "index.php",
        "header.php",
        "sidebar.php",
        "footer.php",
        "single.php",
        "searchform.php",
        "search.php",
        "404.php",
        "./public/**/*.{php,js}",
        "./pages/**/*.{php,js}",
        "./includes/**/*.{php,js}",
    ],
    theme: {
        extend: {
            width: {
                '300': '300px',
                '500': '500px',
            },
            height: {
                '36a': '36rem',
            },
            colors: {
                red : 'rgba(255, 74, 82, 1)',
                text: '#646464',
                title: '#111111',
                grays: '#909090',
                graysl: '#f8f8f8',
                graysd: '#f2f2f2',
                redl: '#fef1f2',
                facebook: '#1877F2',
                twitter: '#1DA1F2',
            },
            backgroundImage: {
                single: 'url("../img/banner.jpeg")'
            }
        }

    },
    plugins: [
        function ({ addComponents }) {
            addComponents({
                '.container': {
                    maxWidth: '100%',
                '@screen sm': {
                    maxWidth: '640px',
                },
                '@screen md': {
                    maxWidth: '768px',
                },
                '@screen lg': {
                    maxWidth: '1024px',
                },
                '@screen xl': {
                    maxWidth: '1200px',
                },
                }
            })
        }
    ]
}