<span class="to_jump" id="dataLoad"></span>
<h2 class="heading center">UseLoader</h2>
<div class="code_p">
    loader:() =>  fetch(`${import.meta.env.VITE_API_URL}/blogs`),
    loader: ({ params }) => fetch(`${import.meta.env.VITE_API_URL}/job/${params.id}`),
</div>
<h2 class="heading center">UseLoader</h2>


<div class="code_p">

</div>