const editBtnList = document.querySelectorAll('[id^="updpateFaturado_"]');

editBtnList.forEach(btn => {

    let id = btn.attributes.id.nodeValue.replace('updpateFaturado_', '');
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        let token = document.head.querySelector("[name=csrf-token]").content;
        console.log(token);
        let url = `/apea/${id}`;
        let redirect = '/estados';

        fetch(url, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token
            },
            method: 'post',
            credentials: 'same-origin',
            body: JSON.stringify({
                id: id
            })
        })
            .then((response) => {
                response.json();
            })
            .then(data => console.log(data))
            .catch((error) => {
                console.log(error);
            })
    })
})

