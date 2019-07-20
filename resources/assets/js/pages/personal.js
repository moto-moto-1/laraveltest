import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import card from './components/card';
import {connect} from 'react-redux';
import {fetchcontacts,fetchtasks,fetchsupplies,fetchteams,fetchalldata} from '../actions/getactions';

class personal extends Component {

componentWillMount(){

    //this.props.fetchcontacts();
    this.props.fetchalldata('none','none');
    
}

    render() {
        return (

<div>
<h1>Personal</h1>

{this.props.contacts.map(user=> 
    <h3 key={user.id}>   
        {user.email}
    </h3>
    )}

    {this.props.tasks.map(task=>
            <card  key={task.id} first={task.taskname} second={task.creator} third={task.owner} pic={task.name}>
            </card>
            )}



</div>
        
);}

}

const mapStateToProps = state => ({
    contacts: state.get.contacts,
    tasks: state.get.tasks,
    supplies: state.get.supplies,
    teams: state.get.teams,
});




 export default connect(mapStateToProps,{fetchcontacts,fetchtasks,
                                         fetchsupplies,fetchteams,
                                         fetchalldata})(personal);