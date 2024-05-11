<span class="to_jump" id="propValidation"></span>
<h2 class="heading center"></h2>
<p class="heading">Install: npm i prototype</p>

<div class="code_p">
    import PropTypes from 'prop-types'; <br>
    <br>
    const Component = ({prop-1, prop-2}) =&gt; { <br>
        
        return (<br><br>
            &lt;div &gt; &lt;/div&gt; <br>
        ); <br>
    }; <br>
    Component.propTypes = { <br>
        prop-1: PropTypes.object.isRequired, <br>
        prop-2: PropTypes.func.isRequired <br>
    } <br>
    export default Component; <br>

</div>
<br>
<h2>To ignore PropType Validation</h2>
<div class="code_p">
    <p class="heading">.eslintrc.cjs</p>
    <p>  "rules": { <br> 
    "react/prop-types": ["off"]
   <br> }</p>
</div>