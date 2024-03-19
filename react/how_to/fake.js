//  import showCodeByIdVariable from './text'
 const codeApp=`
 import { useState } from 'react'
import './App.css'
import Watch from './components/Watch'

function App() {

const watches = [
 {id: 1, name: 'Apple watch', price: 200},
 {id: 2, name: 'Samsu watch', price: 200},
 {id: 3, name: 'MI watch', price: 200},
]

return (
 <>
 <h1>Creat And Load Fake Data</h1>
 {
     watches.map(watch =><Watch watch={watch}></Watch>)
 }

 </>
)
};

export default App
 `;
//  showCodeByIdVariable('app-jsx', codeApp)
// document.getElementById('app-jsx').innerText = codeApp;

const codeWatch =`
import React from "react";
const Watch = ({watch}) => {
const {name, price} = watch;
return (
 <div>
     <h2>Watch:{name}</h2>
     <p>price: {price}</p>
 </div>
);
};
export default Watch;
`
// document.getElementById('watch-jsx').innerText = codeWatch;
function showCodeByIdVariable(id, variableName){
    document.getElementById(id).innerText = variableName;
  }

  showCodeByIdVariable('app-jsx', codeApp)
  showCodeByIdVariable('watch-jsx', codeWatch)