import z from '../lib/zod.js';

export const initBookForm = (formId, onSumbit) => {
  const bookForm = document.getElementById(formId);
  const formElements = Array.from(bookForm.querySelectorAll('.modal__form-element'));

  const initFormMasks = () => {
    const phoneInput = formElements.find(el => el.dataset.fieldName === 'mobileNumber').querySelector('input');
    const dateInput = formElements.find(el => el.dataset.fieldName === 'date').querySelector('input');

    const phoneMask = IMask(phoneInput, {
      mask: '+{7} (000) 000 - 00 - 00',
      lazy: false,
      // prepare: value => {
      //   return value ? value : '';
      // },
    });

    // console.log(phoneMask.value);

    const dateMask = IMask(dateInput, {
      mask: Date,
      min: new Date(),
      lazy: false,
      // prepare: value => {
      //   return value ? value : '';
      // },
    });

    // phoneInput.addEventListener('focus', e => {
    //   console.log('focus');
    //   e.preventDefault();
    // });

    // phoneInput.addEventListener('click', e => {
    //   console.log('focus');
    //   e.preventDefault();
    // });

    // phoneInput.value = '';

    // phoneInput.addEventListener('focus', event => {
    //   mask.updateValue();
    // });

    // phoneInput.addEventListener('blur', event => {
    //   if (phoneInput.value === '') {
    //     phoneInput.value = '';
    //   }
    // });
  };

  initFormMasks();

  const Schema = z.object({
    name: z.string().min(1, { message: 'Обязательное поле' }),
    date: z.string().regex(/^\d{2}\.\d{2}\.\d{4}$/, { message: 'Данные введены некорректно' }),
    guestsNum: z.coerce.number({ message: 'Данные введены некорректно' }).min(1, { message: 'Данные введены некорректно' }),
    mobileNumber: z.string().regex(/^\+7 \(\d{3}\) \d{3} - \d{2} - \d{2}$/, {
      message: 'Данные введены некорректно',
    }),
    additionalData: z.string().optional(),
    personalData: z.literal('on', { message: 'Необходимо согласие на обработку данных' }),
  });

  bookForm.addEventListener('submit', event => {
    event.preventDefault();

    const formData = new FormData(event.target);
    const plainData = Object.fromEntries(formData.entries());

    formElements.forEach(el => {
      el.classList.remove('errored');
      el.querySelector('.modal__form-element-error').textContent = '';
    });

    try {
      Schema.parse(plainData);
      onSumbit(plainData);
    } catch (err) {
      if (err.errors) {
        console.log(err.errors);
        err.errors.forEach(error => {
          const fieldName = error.path[0];
          const message = error.message;

          const errorEl = formElements.find(el => el.dataset.fieldName == fieldName);
          if (errorEl) {
            errorEl.classList.add('errored');
            errorEl.querySelector('.modal__form-element-error').textContent = message;
          }
        });
      }
    }
  });
};
