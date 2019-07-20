import axios from 'axios';
import {get_tasks,get_teams,get_supplies,get_contacts,get_all_data} from './types';

export const fetchcontacts = () => dispatch => {
    
axios.get(`https://twinlist.com/personal/data`,
{
    headers: {'Content-Type': 'application/json'},
    params: {
        data_needed: 'contacts',
        id:'none',
        team: 'none'

    }
}

).then(function (response) {
        dispatch(
                        {
                            type: get_contacts,
                            payload: response.data
                        }
                    
);});




};

export const fetchtasks = () => dispatch => {

    axios.get(`https://twinlist.com/personal/data`,
{
    headers: {'Content-Type': 'application/json'}
}

).then(function (response) {
        dispatch(
                        {
                            type: get_tasks,
                            payload: response.data
                        }
                    
);});


};

export const fetchsupplies = () => dispatch => {

    axios.get(`https://twinlist.com/personal/data`,
{
    headers: {'Content-Type': 'application/json'}
}

).then(function (response) {
        dispatch(
                        {
                            type: get_supplies,
                            payload: response.data
                        }
                    
);});


};

export const fetchteams = () => dispatch => {

    axios.get(`https://twinlist.com/personal/data`,
{
    headers: {'Content-Type': 'application/json'}
}

).then(function (response) {
        dispatch(
                        {
                            type: get_teams,
                            payload: response.data
                        }
                    
);});


};

export const fetchalldata = (id,team) => dispatch => {

    axios.get(`https://twinlist.com/personal/data`,
{
    headers: {'Content-Type': 'application/json'},
    params: {
        data_needed: 'all',
        id: id,
        team: team

    }
}

).then(function (response) {
        dispatch(
                        {
                            type: get_all_data,
                            payload: response.data
                        }
                    
);});


};








// fetch('https://twinlist.com/personal/data').then(res => res.json())
//     .then(users =>
//         dispatch(
//             {
//                 type: get_contacts,
//                 payload: users
//             }
//         )


//     )


