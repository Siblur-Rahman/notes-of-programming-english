<span class="to_jump" id="setup"></span>
<h2 class="heading center">React Setup</h2>
<div class="code_p">
    npm create vite@latest my-project -- --template react <br>
    cd my-project <br>
    cd my-project <br>
    npm install <br>
    npm run dev <br>
    <h3 class="heading">React Setup with tailwindcss</h3>
    npm create vite@latest my-project -- --template react <br>
    cd my-project <br>
    npm install -D tailwindcss postcss autoprefixer <br>
    npx tailwindcss init -p <br>

    <p class="heading">tailwind.config.js</p>
    content: [ <br>
    "./index.html", <br>
    "./src/**/*.{js,ts,jsx,tsx}", <br>
    ], <br>

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
    <h3 class="heading"></h3>
    <h3 class="heading"></h3>
    <h3 class="heading"></h3>
    <h3></h3>
</div>
<h2></h2>