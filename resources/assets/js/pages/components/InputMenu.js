import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import * as constants from '../constants';
import DatePicker from "react-datepicker";
import "react-datepicker/dist/react-datepicker.css";
import InputLine from "./InputLine";

export default class InputMenu extends Component {
    
    constructor(props){
        super(props)
        this.state = {date: new Date() , startDate: new Date()};
        this.dateChanged = this.dateChanged.bind(this);
      }
      
      dateChanged(d){
        this.setState({date: d});
      }
    
    
    render() {
        const fields = this.props.inputfields;
                  

        switch(fields) {
            case 'task':
            // return constants.constant_new_task_fields[0];
                     
            return constants.constant_new_task_fields.map(
                (link,key) =>
                <InputLine header={link.fieldname} placeholder={link.inputfielddata} type={link.inputfieldtype} />
            );
 
            case 'office':
            show = constants.constant_new_office_fields;
            case 'supply':
            show = constants.constant_new_supply_fields;
            default:
              return null;
          }

}

}
