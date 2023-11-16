import {redirectForWhatsappWithMessage}  from "./whatsapp.js"

const buttonBoxRectangleManuntencao = document.getElementById("boxRectangleButtonManuntencao")
if (buttonBoxRectangleManuntencao) { // Verifica se o botão existe no HTML
    buttonBoxRectangleManuntencao.addEventListener("click", ()=>{
        alert("Iremos te redirecionar para o whatsapp agora !")
        const date = new Date
        let messageCumprimentationDay = "" // Mensagem de Bom Dia, Boa Tarde ou Boa noite
        const actualyHour = date.getHours()
        if (actualyHour >=1 && actualyHour <= 12){
            messageCumprimentationDay = "Bom Dia"
        }
        else if(actualyHour >=13 && actualyHour <= 17){
            messageCumprimentationDay = "Boa Tarde"
        }
        else{
            messageCumprimentationDay = "Boa noite"
        }
        let message = `
        Olá, ${messageCumprimentationDay}
        Gostaria de realizar um orçamento na manutenção do meu aparelho.
        `
        redirectForWhatsappWithMessage(message)

    })
}
