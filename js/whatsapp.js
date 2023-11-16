// Funcionalidae que redireciona para o whatsapp com uma mensagem
function redirectForWhatsappWithMessage(message){
    const number = "5571985119712"
    const url = `https://wa.me/${number}?text=${message}`
    location.href = url
}


export {redirectForWhatsappWithMessage}