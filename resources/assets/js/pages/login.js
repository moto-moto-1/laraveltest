import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import InputLine from "./components/InputLine";


export default class login extends Component {
    render() {
        return (
            <div>
                <h1>Login</h1>

<InputLine header='Account' placeholder='ID | e-mail | phone'
           type='input' />

<InputLine header='Password' placeholder=''
           type='password' />



</div>
        );
    }
}

//  if (document.getElementById('root')) {
//      ReactDOM.render(<Example1 />, document.getElementById('root'));
//  }
