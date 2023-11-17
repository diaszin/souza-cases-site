// Funcionalidae que redireciona para o whatsapp com uma mensagem
function redirectForWhatsappWithMessage(message){
    const number = "5571985119712" // Número da empresa
    const url = `https://wa.me/${number}?text=${message}` // URL que tem a função de redirecionar para o whatsapp 
    location.href = url
}


export {redirectForWhatsappWithMessage}