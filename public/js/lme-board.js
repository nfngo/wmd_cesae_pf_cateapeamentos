const tarifasBtn = document.getElementById('tarifasBtn');
const tarifasStatic = document.getElementById('tarifasStatic');
const tarifasForm = document.getElementById('tarifasForm');
const tarifasCancelBtn = document.getElementById('tarifasCancelBtn');

const cabosBtnList = document.querySelectorAll('[id^="caboEditBtn_"]');
const cabosStaticList = document.querySelectorAll('[id^="caboStatic_"]');
const cabosFormList = document.querySelectorAll('[id^="caboForm_"]');
const cabosCancelBtnList = document.querySelectorAll('[id^="caboCancelBtn_"]');

const cardSwapBtn = document.getElementById('cardSwapBtn');

const plasticoContainer = document.getElementById('PlásticoContainer');
const chumboContainer = document.getElementById('ChumboContainer');

const editForm = document.getElementById('editForm');

tarifasBtn.addEventListener('click', (e) => {
    e.preventDefault();
    tarifasStatic.style.opacity = '0';
    tarifasStatic.style.zIndex = '-1';
    tarifasStatic.style.transform = "translateY(0%)";

    tarifasForm.style.opacity = '1';
    tarifasForm.style.zIndex = '1';
    tarifasForm.style.transform = "translateY(0%)";
})

tarifasCancelBtn.addEventListener('click', (e) => {
    e.preventDefault()
    tarifasStatic.style.opacity = '1';
    tarifasStatic.style.zIndex = '1';
    tarifasStatic.style.transform = "translateY(-100%)";

    tarifasForm.style.opacity = '0';
    tarifasForm.style.zIndex = '-1';
    tarifasForm.style.transform = "translateY(-100%)";
})

cabosBtnList.forEach((caboBtn, index) => {
    caboBtn.addEventListener('click', (e) => {
        e.preventDefault();
        cabosStaticList[index].style.opacity = '0';
        cabosStaticList[index].style.transform = 'translateY(-100%)';
        cabosStaticList[index].style.zIndex = '-1';

        cabosFormList[index].style.opacity = '1';
        cabosFormList[index].style.transform = 'translateY(-100%)';
        cabosFormList[index].style.zIndex = '1';
    })
});

cabosCancelBtnList.forEach((cancelBtn, index) => {
    cancelBtn.addEventListener('click', (e) =>  {
        e.preventDefault();
        cabosStaticList[index].style.opacity = '1';
        cabosStaticList[index].style.transform = 'translateY(0%)';
        cabosStaticList[index].style.zIndex = '1';

        cabosFormList[index].style.opacity = '0';
        cabosFormList[index].style.transform = 'translateY(0%)';
        cabosFormList[index].style.zIndex = '-1';
    })
});

let opacity = window.getComputedStyle(plasticoContainer).getPropertyValue('opacity');

cardSwapBtn.addEventListener('click', (e) => {
    e.preventDefault();

    if(opacity === '1') {
        plasticoContainer.style.opacity = '0';
        plasticoContainer.style.transform = "translateX(-100%)";
        plasticoContainer.style.zIndex = "-1";

        chumboContainer.style.opacity = '1';
        chumboContainer.style.transform = "translateX(-100%)";
        chumboContainer.style.zIndex = "1";
        opacity = '0';
    } else {
        plasticoContainer.style.opacity = '1';
        plasticoContainer.style.transform = "translateX(0%)";
        plasticoContainer.style.zIndex = "-1";

        chumboContainer.style.opacity = '0';
        chumboContainer.style.transform = "translateX(0%)";
        chumboContainer.style.zIndex = "-1";
        opacity = '1';
    }
})

const populateEditForm = (item) => {
    editForm.action = `${window.location.protocol}//${window.location.hostname}:${window.location.port}/lme/${item.id}`;
    document.getElementById('usd_ton_cobre').value = item.usd_ton_cobre;
    document.getElementById('usd_ton_chumbo').value = item.usd_ton_chumbo;
    document.getElementById('rate_usd_euro').value = item.rate_usd_euro;
};
