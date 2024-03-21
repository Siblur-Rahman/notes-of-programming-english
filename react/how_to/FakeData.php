<span class="to_jump" id="FakeData"></span>
<h2 class="heading center">FakeData</h2>
    <!-- Without fetch -->
    <p class="heading">Without fetch</p>
        <div class="border">
            <h3 class="heading">App.jsx</h3>
            <div id="app-jsx" class="code_p">

            </div>
                <h3 class="heading">Watch.jsx</h3>
            <div id="watch-jsx" class="code_p">

            </div>
        </div>
    <!-- With fetch -->
    <p class="heading">With fetch</p>
        <div class="border">
            <h3 class="heading">App.jsx</h3>
            <div id="app-2-jsx" class="code_p">

            </div>
                <h3 class="heading">Watch.jsx</h3>
            <div id="watch-2-jsx" class="code_p">

            </div>
            <h3>json file</h3>
                <h3 class="heading">Watches.jsx</h3>
            <div id="fetch-jsx" class="code_p">

            </div>
        </div>

        <!-- Js Code -->
    <script>
        // import showCodeByIdVariable from '../../js/common.js'
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
        // showCodeByIdVariable('app-jsx', codeApp)
  document.getElementById('app-jsx').innerText = codeApp;

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
  document.getElementById('watch-jsx').innerText = codeWatch;

//   With fetch

const codeApp_2=`
import { useEffect, useState } from 'react'
import './App.css'
import Watch from './components/Watch'

function App() {
  const [watches, setWatches] = useState([]);
  useEffect(() =>{
    fetch('watches.json')
    .then(res=>res.json())
    .then(data=>setWatches(data))
  }, [])
  return (
    <>
    <h1>Creat And Load Fake Data</h1>
      {
        watches.map(watch =><Watch watch={watch}></Watch>)
      }

    </>
  )
}

export default App
`
document.getElementById('app-2-jsx').innerText = codeApp_2;
const codeWatch_2  =`
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
document.getElementById('watch-2-jsx').innerText = codeWatch_2;
const code_fetch =`
[
    {"id": 1, "name": "Apple watch", "price": 20000},
    {"id": 2, "name": "Samsu watch", "price": 20000},
    {"id": 3, "name": "MI watch", "price": 20000}
  ]
`
document.getElementById('fetch-jsx').innerText = code_fetch;

    </script>