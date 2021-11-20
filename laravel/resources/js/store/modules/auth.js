import router from '../../router';

const state = {
    token: '',
    userId: ''
};

const getters = {
  token: state => state.token,
  userId: state => state.userId,
  isLogin: state => state.token ? true : false,
};

const mutations = {
    login(state, payload) {
        state.token = payload.token;
        state.userId = payload.userId;
    },
    logout(state) {
        state.token = null;
        state.userId = null;
    }
};

const actions = {
    login({ commit }, payload) {
        axios.post('/api/login', {
            email: payload.email,
            password: payload.password
        }).then(res => {
            const token = res.data.access_token;
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;

            commit('login', token);
            router.push({path: '/'});
            commit('alert/setAlert', { 'message': 'ログインしました。' }, { root: true });
        }).catch(error => {
            commit('alert/setAlert', { 'message': 'ログインに失敗しました。', 'type': 'danger' }, { root: true });
        });
    },
    logout({ commit }) {
        axios.post('/api/logout').then(res => {
            axios.defaults.headers.common['Authorization'] = '';
            commit('logout');
            router.push({path: '/'});
            commit('alert/setAlert', { 'message': 'ログアウトしました。' }, { root: true });
        }).catch(error => {
            commit('alert/setAlert', { 'message': 'ログアウトに失敗しました。' }, { root: true });
        });
    }
};

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};
