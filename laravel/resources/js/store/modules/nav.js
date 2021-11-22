const state = {
  sideBarOpen: true,
};

const getters = {
  sideBarOpen: state => state.sideBarOpen
};
 
const mutations = {
  TOGGLE_SIDEBAR(state, payload) {
    state.sideBarOpen = !payload
  }
};

const actions = {
  getSideBarStatus({commit}, payload) {
    commit('TOGGLE_SIDEBAR', payload)
  }
};

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
};
