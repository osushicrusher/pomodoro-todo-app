const state = {
  catObj: {},
  categories: [],
  pageNums: [],
};

const getters = {
  catObj:state => state.catObj,
  categories: state => state.categories,
  pageNums: state => state.pageNums,
  current_page: state => state.catObj.current_page,
  last_page: state => state.catObj.last_page,
  last_page_url: state => state.catObj.last_page_url,
  from: state => state.catObj.from,
  to: state => state.catObj.to,
  per_page: state => state.catObj.per_page,
  total: state => state.catObj.total,
};
 
const mutations = {
  SET_CATEGORY(state, payload) {
    state.catObj = payload.data
    state.categories = payload.data.data
    state.pageNums = [...Array(payload.data.last_page)].map((_, i) => i + 1)
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
