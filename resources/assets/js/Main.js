import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import {Provider} from 'react-redux';
import store from './store';


import Navigationbar from './pages/components/navbar';



    class App extends Component {
      render() {
        return (
<Provider store={store}>
<Navigationbar />    
</ Provider>       
        );
      }
    }

    // export default App;

    if (document.getElementById('root')) {
        ReactDOM.render(<App />, document.getElementById('root'));
    }

    