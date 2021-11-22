const state = {
  catObj: {},
  categories: [],
};

const getters = {
  catObj:state => state.catObj,
  categories: state => state.categories,
};
 
const mutations = {
  SET_CATEGORY(state, payload) {
    state.catObj = payload.data
    state.categories = payload.data.data
  }
};

const actions = {
  async getCategory({dispatch, commit}, payload) {
    commit('SET_CATEGORY', await dispatch('fetchCategory', payload))
  },
  async fetchCategory({}, payload) {
    const url = payload === undefined ? `/api/categories` : `/api/categories?page=${payload}`
    const category_list = await axios.get(url)
    return category_list
  }
};

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
};
