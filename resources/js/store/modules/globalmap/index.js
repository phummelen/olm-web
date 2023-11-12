import { init } from './init'
import { actions } from './actions'
import { mutations } from './mutations'

const state = Object.assign({}, init);

export const globalmap = {
  state,
  actions,
  mutations
}
