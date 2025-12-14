import Accordion from './Accordion.vue';
import AccordionItem from './AccordionItem.vue';

export { Accordion, AccordionItem };

export default {
  install(app) {
    app.component('SbAccordion', Accordion);
    app.component('SbAccordionItem', AccordionItem);
  }
};
