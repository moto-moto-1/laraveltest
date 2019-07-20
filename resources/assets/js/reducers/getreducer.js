import {get_tasks,get_teams,get_supplies,get_contacts,get_all_data} from '../actions/types';

const initialState = {
    id:'',
    team:'',
    tasks:[],
    supplies:[],
    teams:[],
    contacts:[]

}

export default (state = initialState, { type, payload }) => {
    switch (type) {

        case get_tasks:
        return { ...state, tasks: payload }

        case get_teams:
        return { ...state, teams: payload }

        case get_supplies:
        return { ...state, supplies: payload }

        case get_contacts:
        console.log("inside contacts reducers");
        console.log(payload);
        return { ...state, contacts: payload }

        case get_all_data:
        return { ...state, supplies: payload.supplies,tasks: payload.tasks,
                           contacts: payload.contacts,teams: payload.teams }

    default:
        return state;
    }
}
