const state = {
    userObj: {},
    users: [],
    pageNums: [1, 2, 3, 4],
};

const getters = {
  userObj: state => state.userObj,
  users: state => state.users,
  pageNums: state => state.pageNums,
  current_page: state => state.userObj.current_page,
  last_page: state => state.userObj.last_page,
  last_page_url: state => state.userObj.last_page_url,
  from: state => state.userObj.from,
  to: state => state.userObj.to,
  per_page: state => state.userObj.per_page,
  total: state => state.userObj.total,
};
 
const mutations = {
  SET_USER(state, payload) {
    state.userObj = payload.data;
    state.users = payload.data.data;
  }
};

const actions = {
  async getUser({dispatch, commit}, payload) {
    commit('SET_USER', await dispatch('fetchUser', payload))
  },
  async fetchUser({}, payload) {
    const url = payload === undefined ? `/api/users` : `/api/users?page=${payload}`
    const user_list = await axios.get(url)
    return user_list
  }
};

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
};
