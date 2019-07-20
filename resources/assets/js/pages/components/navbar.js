import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link,Switch } from 'react-router-dom';
    import login from '../login'
    import register from '../register'
    import personal from '../personal'
    import team from '../team'
    import personalreports from '../personalreports'
    import teamreports from '../teamreports'

export default class Navigationbar extends Component {
    render() {
        return (


          <Router>



          <div>

            <div>

<nav className="navbar navbar-expand-md bg-dark navbar-dark">
  <Link className="navbar-brand" to="#">Twinlist</Link>
  <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span className="navbar-toggler-icon"></span>
  </button>
  <div className="collapse navbar-collapse" id="collapsibleNavbar">
    <ul className="navbar-nav">
      <li className="nav-item">
        <Link className="nav-link" to="/personal">Personal</Link>
      </li>  
      <li className="nav-item">
        <Link className="nav-link" to="/team">Team</Link>
      </li>
      <li className="nav-item">
        <Link className="nav-link" to="/register">Register</Link>
      </li>    
      <li className="nav-item">
        <Link className="nav-link" to="/login">Login</Link>
      </li> 
      
    </ul>
  </div>  
</nav>



</div>
<Switch>        
  <Route exact path="/" component={personal} />
  <Route path="/login" component={login} />
  <Route path="/register" component={register} />
  <Route path="/personal" component={personal} />
  <Route path="/team" component={team} />
  <Route path="/personalreports" component={personalreports} />
  <Route path="/teamreports" component={teamreports} />
   </Switch>

  </div>

  
  
         </Router>       
);}

}

