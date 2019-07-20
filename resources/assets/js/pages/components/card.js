import React, { Component } from 'react';
import "./card.scss";

export default class card extends Component {

    constructor(props){
        super(props)
         }


         render() {

        const first = this.props.first;
        const second = this.props.second;
        const third = this.props.third;
        const pic = this.props.pic;


            return <div className='card'> 

        <div className='pic'>{pic}</div>
<div className='carddata'>
<div className='firstlinecontainer'>   <div className='firstline'>{first}</div>          <div className='info'>i</div> </div>
<div className='secondline'>{second}</div> 
<div className='thirdlinecontainer'>   <div className='thirdline'>{third}</div>          <div className='expand'>v</div> </div>
            </div>

            </div>


         }


}