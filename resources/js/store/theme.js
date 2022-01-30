export default {
    state: {
        theme: 'light'
    },

    getters: {
        getTheme: (state) => {
            return state.theme;
        }
    },
    mutations: {
        SET_THEME(state, theme) {
            state.theme = theme;
            localStorage.theme = theme;
        }
    },
    actions: {
        TOGGLE_THEME : (context) => {
            switch (localStorage.theme) {
                case 'light':
                    context.commit('SET_THEME', 'dark')
                    break;

                default:
                    context.commit('SET_THEME', 'light')
                    break;
            }
        },
        INIT_THEME : (context) => {
            const cachedTheme = localStorage.theme ? localStorage.theme : false;
            //  `true` if the user has set theme to `dark` on browser/OS
            const userPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (cachedTheme)
                context.commit('SET_THEME', cachedTheme)
            else if (userPrefersDark)
                context.commit('SET_THEME', 'dark')
            else
                context.commit('SET_THEME', 'light')
        },
    }
}

// function tempyGen(payload) {
//     // проверяем наличие персонального идентификатора
//     let tempy;
//     if (localStorage.getItem('tempy')) {
//         try {
//             tempy = JSON.parse(localStorage.getItem('tempy'));
//         } catch(e) {
//             localStorage.removeItem('tempy');
//         }
//     } else {
//         // если не обнаружен
//         // генерируем случайную строку
//         let s = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
//         tempy = Array(16).join().split(',').map(function() { return s.charAt(Math.floor(Math.random() * s.length)); }).join('');
//
//         // сохраняем в браузер пользователя
//         const parsed = JSON.stringify(tempy);
//         localStorage.setItem('tempy', parsed);
//     };
//     // добавляем к данным из формы
//     payload.tempy = tempy;
//
//     return payload;
// }
