import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example1 extends Component {
    render() {
        return (
            <div className="container">
                <div className="row">
                    <div className="col-md-8 col-md-offset-2">
                        <div className="panel panel-default">
                            <div className="panel-heading">Example Component 1</div>

                            <div className="panel-body">
                                I'm an example 1 component!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

//  if (document.getElementById('root')) {
//      ReactDOM.render(<Example1 />, document.getElementById('root'));
//  }
