const emailval = () => {
    const regex = /^[0-9a-z._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
    const email = document.getElementById('email').value;
    if (!regex.test(email)){
        alert(' resubmit email');
        console.log('email-true');
        return true;
    }
    else{
        console.log('email-false');
        return false;
    }
}

const phoneval = () => {
    const regex = /[0-9]{10}/;
    const phone = document.getElementById('email').value;
    if (!regex.test(phone)){
        alert(' resubmit phone number');
        console.log('phone-true');
        return true;
    }
    else{
        console.log('phone-false');
        return false;
    }
}


const submit = () => {
    phoneval();
    emailval();
}