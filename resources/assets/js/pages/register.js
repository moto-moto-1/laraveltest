import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import InputLine from "./components/InputLine";
import axios from 'axios';


export default class register extends Component {
   
    constructor(props) {
        super(props);

        this.state = {csrf_token: ''};

      }
   
    componentDidMount(){

        axios.get(`https://twinlist.com/api/auth/csrf`).   
        then(function (response) {
            
           this.setState({csrf_token: response,});
    });  



}   
   
    render() {

        

        
        return (
<div>

<h1>Register</h1>

<form class="form-horizontal" method="POST" action="https://twinlist.com/api/auth/register">
                    

{this.state.csrf_token}


<InputLine header='Full name' placeholder='Alex mahone'
           type='input' />

<InputLine header='e-mail' placeholder='Alex.mahone@domain.com'
           type='input' />

<InputLine header='Phone' placeholder='+129384756'
           type='input' />

<InputLine header='Password' placeholder=''
           type='password' />

<InputLine header='Confirm password' placeholder=''
           type='password' />  
<button type="submit" >Register</button>

</form>           
           
               

    </div>    
);}

}

