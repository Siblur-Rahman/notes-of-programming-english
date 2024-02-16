function showCode(OutputId, codeText){
    const insertEle_1 = document.getElementById(OutputId);
    insertEle_1.style='color:blue; border:5px solid black; padding:10px';
    insertEle_1.innerText = codeText;
 }
 document.querySelector('body').classList.add('p-6','bg-slate-300','text-red-500')