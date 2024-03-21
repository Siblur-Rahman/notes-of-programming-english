<span class="to_jump" id="css_react"></span>

<h2>Styling React Using CSS<span><a href="https://www.w3schools.com/react/react_css_styling.asp" target="_blank"> Details</a></span></h2>
<h3>1. To style an element with the inline style attribute, the value must be a JavaScript object:</h3>
<div class="code_p" id="code-1"> 
</div>

<h3>2. Properties Name must be written with camel case syntax:</h3>
<div class="code_p" id="code-2"></div>
3. It can also create an object with styling information, and refer to it in the style attribute
<div class="code_p" id="code-3"></div>
<h3>4. We can write your CSS styling in a separate file, just save the file with the .css file extension, and import it into our application.</h3>
<div class="code_p" id="code-4"></div>
<div class="code_p" id="code-"></div>
<div class="code_p" id="code-"></div>
     <script>
      const code_1 =`<h1 style={{color:'green'}}>Inline CSS</h1>`
      document.getElementById('code-1').innerText = code_1;

      const code_2 =`<h1 style={{backgroundColor:'green'}}>Inline CSS</h1>`
      document.getElementById('code-2').innerText = code_2;

      const code_3 =`const color ={
                     color: 'red',
                     backgroundColor:'green'
                     };
                     <h1 style={color}>Inline CSS</h1>
                     `
      document.getElementById('code-3').innerText = code_3;
      const code_4 =`.css {
      background-color: #282c34;
      color: white;
      padding: 40px;
      font-family: Sans-Serif;
      text-align: center;
    }
    import './App.css'
    <div className="css">
          style sheet adding
        </div>`
          document.getElementById('code-4').innerText = code_4;
          // const code_ =``
          // document.getElementById('code-').innerText = code_;
     </script> 


