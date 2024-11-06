const modalTint = document.getElementsByClassName('modal-tint')[0];

const initCloseEvent = modal => {
  const btnClose = modal.querySelector('.modal__close');
  btnClose.addEventListener('click', () => {
    modal.classList.remove('active');
    modalTint.classList.remove('active');
  });
};

const ajustModalPosition = modal => {
  // console.log(modal.clientHeight, window.innerHeight);

  // if (modal.offsetTop <= 16) {
  //   modal.classList.add('modal_too-tall');
  // } else {
  //   modal.classList.remove('modal_too-tall');
  // }

  if (modal.clientHeight + 32 >= window.innerHeight) {
    modal.classList.add('modal_too-tall');
  } else {
    modal.classList.remove('modal_too-tall');
  }
};

const init = () => {
  const modals = document.querySelectorAll('.modal');
  modals.forEach(modal => initCloseEvent(modal));
  modals.forEach(modal => modal.addEventListener('click', e => e.stopPropagation()));
  modalTint.addEventListener('click', () => {
    const currentModal = document.querySelector('.modal.active');
    if (currentModal) {
      currentModal.classList.remove('active');
      modalTint.classList.remove('active');
    }
  });

  window.addEventListener('resize', () => {
    modals.forEach(modal => {
      ajustModalPosition(modal);
    });
  });
};

export const openModal = (modalId, withBackground = true) => {
  const modal = document.getElementById(modalId);
  modal.classList.add('active');
  if (withBackground) {
    modalTint.classList.add('active');
  }
  ajustModalPosition(modal);
};

export const closeModal = modalId => {
  const modal = document.getElementById(modalId);
  modal.classList.remove('active');
  modalTint.classList.remove('active');
};

init();
