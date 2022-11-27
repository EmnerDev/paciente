function grabarVoz(number){
    console.log(document.getElementsByTagName('input')[number].value);

    let recognition = new webkitSpeechRecognition();
    recognition.lang = 'es-Es';
    recognition.continuous = true;
    recognition.interimResults = false;

    recognition.onresult = (event)=>{
    const results = event.results;
    const frase = results[results.length - 1][0].transcript;
    document.getElementsByTagName('input')[number].value += frase;


    if(document.getElementById('peso').value != ''){
        console.log('pase')
        let peso=document.getElementById('peso').value;
        let talla=document.getElementById('talla').value;
         if(talla != ''){
            let cmtalla=talla*100;
            let promedio=(Math.sqrt((parseFloat(peso)*parseFloat(cmtalla))/3600)).toFixed(2);
             document.getElementById('s_corporal').value=promedio;

             let imcpromedio=((parseFloat(peso))/(parseFloat(talla)*parseFloat(talla))).toFixed(2);
             document.getElementById('imc').value=imcpromedio;

             if(imcpromedio < 18) {
                document.getElementById('clasificacion_imc').value = 'No identificado';
                document.getElementById('r_enfermedad').value = 'No identificado';

            }

                if(imcpromedio >18 && imcpromedio < 24.9) {
                    document.getElementById('clasificacion_imc').value = 'Normal';
                    document.getElementById('r_enfermedad').value = 'Riesgo';

                }
                if(imcpromedio >25 && imcpromedio < 29.9) {
                    document.getElementById('clasificacion_imc').value = 'Sobrepeso';
                    document.getElementById('r_enfermedad').value = 'Aumentado';

                }if(imcpromedio >30 && imcpromedio < 34.9) {
                    document.getElementById('clasificacion_imc').value = 'Obesidad Grado 1';
                    document.getElementById('r_enfermedad').value = 'Moderado';

                }if(imcpromedio >35 && imcpromedio < 39.9) {
                    document.getElementById('clasificacion_imc').value = 'Obesidad Grado 2';
                    document.getElementById('r_enfermedad').value = 'Severo';

                }if(imcpromedio > 40) {
                    document.getElementById('clasificacion_imc').value = 'Obesidad Grado 3';
                    document.getElementById('r_enfermedad').value = 'Muy severo';

                }

         }
         if(peso != ''){
            let cmtalla=talla*100;
            let promedio=(Math.sqrt((parseFloat(peso)*parseFloat(cmtalla))/3600)).toFixed(2);
             document.getElementById('s_corporal').value=promedio;

             let imcpromedio=((parseFloat(peso))/(parseFloat(talla)*parseFloat(talla))).toFixed(2);
             document.getElementById('imc').value=imcpromedio;

             if(imcpromedio < 18) {
                document.getElementById('clasificacion_imc').value = 'No identificado';
                document.getElementById('r_enfermedad').value = 'No identificado';

            }

                if(imcpromedio >18 && imcpromedio < 24.9) {
                    document.getElementById('clasificacion_imc').value = 'Normal';
                    document.getElementById('r_enfermedad').value = 'Riesgo';

                }
                if(imcpromedio >25 && imcpromedio < 29.9) {
                    document.getElementById('clasificacion_imc').value = 'Sobrepeso';
                    document.getElementById('r_enfermedad').value = 'Aumentado';

                }if(imcpromedio >30 && imcpromedio < 34.9) {
                    document.getElementById('clasificacion_imc').value = 'Obesidad Grado 1';
                    document.getElementById('r_enfermedad').value = 'Moderado';

                }if(imcpromedio >35 && imcpromedio < 39.9) {
                    document.getElementById('clasificacion_imc').value = 'Obesidad Grado 2';
                    document.getElementById('r_enfermedad').value = 'Severo';

                }if(imcpromedio > 40) {
                    document.getElementById('clasificacion_imc').value = 'Obesidad Grado 3';
                    document.getElementById('r_enfermedad').value = 'Muy severo';

                }

         }
        console.log(document.getElementById('peso').value);
    }
}
recognition.onend = (event) => {
    console.log('el microfono dejo de escuchar')
}
recognition.onerror = (event) => {
    console.log(event.error)
}
recognition.start();
}
 //mostrar mensaje
//  let peso=document.getElementById('peso').value;
document.getElementById('peso').addEventListener('keyup',(e)=>{
    let peso=document.getElementById('peso').value;
    let talla=document.getElementById('talla').value;
     if(talla != ''){
        let cmtalla=talla*100;
        let promedio=(Math.sqrt((parseFloat(peso)*parseFloat(cmtalla))/3600)).toFixed(2);
         document.getElementById('s_corporal').value=promedio;

         let imcpromedio=((parseFloat(peso))/(parseFloat(talla)*parseFloat(talla))).toFixed(2);
         document.getElementById('imc').value=imcpromedio;

         if(imcpromedio < 18) {
            document.getElementById('clasificacion_imc').value = 'No identificado';
            document.getElementById('r_enfermedad').value = 'No identificado';

        }

            if(imcpromedio >18 && imcpromedio < 24.9) {
                document.getElementById('clasificacion_imc').value = 'Normal';
                document.getElementById('r_enfermedad').value = 'Riesgo';

            }
            if(imcpromedio >25 && imcpromedio < 29.9) {
                document.getElementById('clasificacion_imc').value = 'Sobrepeso';
                document.getElementById('r_enfermedad').value = 'Aumentado';

            }if(imcpromedio >30 && imcpromedio < 34.9) {
                document.getElementById('clasificacion_imc').value = 'Obesidad Grado 1';
                document.getElementById('r_enfermedad').value = 'Moderado';

            }if(imcpromedio >35 && imcpromedio < 39.9) {
                document.getElementById('clasificacion_imc').value = 'Obesidad Grado 2';
                document.getElementById('r_enfermedad').value = 'Severo';

            }if(imcpromedio > 40) {
                document.getElementById('clasificacion_imc').value = 'Obesidad Grado 3';
                document.getElementById('r_enfermedad').value = 'Muy severo';

            }

     }
    console.log(document.getElementById('peso').value);
});

document.getElementById('talla').addEventListener('keyup',(e)=>{
    let peso=document.getElementById('peso').value;
    let talla=document.getElementById('talla').value;
     if(peso != ''){
        let cmtalla=talla*100;
        let promedio=(Math.sqrt((parseFloat(peso)*parseFloat(cmtalla))/3600)).toFixed(2);
         document.getElementById('s_corporal').value=promedio;

         let imcpromedio=((parseFloat(peso))/(parseFloat(talla)*parseFloat(talla))).toFixed(2);
         document.getElementById('imc').value=imcpromedio;

         if(imcpromedio < 18) {
            document.getElementById('clasificacion_imc').value = 'No identificado';
            document.getElementById('r_enfermedad').value = 'No identificado';

        }

            if(imcpromedio >18 && imcpromedio < 24.9) {
                document.getElementById('clasificacion_imc').value = 'Normal';
                document.getElementById('r_enfermedad').value = 'Riesgo';

            }
            if(imcpromedio >25 && imcpromedio < 29.9) {
                document.getElementById('clasificacion_imc').value = 'Sobrepeso';
                document.getElementById('r_enfermedad').value = 'Aumentado';

            }if(imcpromedio >30 && imcpromedio < 34.9) {
                document.getElementById('clasificacion_imc').value = 'Obesidad Grado 1';
                document.getElementById('r_enfermedad').value = 'Moderado';

            }if(imcpromedio >35 && imcpromedio < 39.9) {
                document.getElementById('clasificacion_imc').value = 'Obesidad Grado 2';
                document.getElementById('r_enfermedad').value = 'Severo';

            }if(imcpromedio > 40) {
                document.getElementById('clasificacion_imc').value = 'Obesidad Grado 3';
                document.getElementById('r_enfermedad').value = 'Muy severo';

            }

     }
    console.log(document.getElementById('peso').value);
});
