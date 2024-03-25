<span class="to_jump" id="setup"></span>
<h2 class="heading center">React Setup</h2>
<div class="code_p">
    npm create vite@latest my-project -- --template react <br>
    cd my-project <br>
    cd my-project <br>
    npm install <br>
    npm run dev <br>

    <h3 class="heading">React Router</h3>
    npm install react-router-dom localforage match-sorter sort-by

    <h3 class="heading">React Setup with tailwindcss</h3>
    npm create vite@latest my-project -- --template react <br>
    cd my-project <br>
    npm install -D tailwindcss postcss autoprefixer <br>
    npx tailwindcss init -p <br>

    <p class="heading">tailwind.config.js</p>
    content: ["./index.html","./src/**/*.{js,ts,jsx,tsx}",], <br>

    <p class="heading">index.css</p>
    @tailwind base; <br>
    @tailwind components; <br>
    @tailwind utilities; <br>

    <h3 class="heading">With DaigyUI</h3>
    npm i -D daisyui@latest <br> <br>
    <p class='heading'>tailwind.config.js</p>
    module.exports = { <br>
  //... <br>
  plugins: [require("daisyui")], <br>
}
<h3 class="heading">Material Tailwind</h3>
npm i @material-tailwind/react

<p class="heading"></p>

const withMT = require("@material-tailwind/react/utils/withMT"); <br>
/** @type {import('tailwindcss').Config} */ <br>
export default withMT({ <br>
  content: [ <br>
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
    ],
  theme: { <br>
    extend: {}, <br>
  }, <br>
  plugins: [], <br>
}) <br>

<h3 class="heading">To Fix Require</h3>
<p class="heading">.eslintrc.cjs</p>
<div>env: { browser: true, es2020: true, <span class="itc">node:true</span> }</div>
    <h3 class="heading">install React Icon</h3>
    <div>npm install react-icons --save</div>
    <h3 class="heading"></h3>
    <h3 class="heading"></h3>
    <h3></h3>
</div>
<h2></h2>