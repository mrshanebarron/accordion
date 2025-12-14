import Accordion from './Accordion.vue';
import AccordionItem from './AccordionItem.vue';

export { Accordion, AccordionItem };

export default {
  install(app) {
    app.component('LdAccordion', Accordion);
    app.component('LdAccordionItem', AccordionItem);
  }
};
