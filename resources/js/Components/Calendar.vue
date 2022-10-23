<script lang='ts'>
import { defineComponent } from 'vue'
import '@fullcalendar/core/vdom' // solve problem with Vite
import FullCalendar, { CalendarOptions, EventApi, DateSelectArg, EventClickArg } from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import timeGridPlugin from '@fullcalendar/timegrid'
import interactionPlugin from '@fullcalendar/interaction'
import { INITIAL_EVENTS, createEventId } from '../../../event-utils'
import axios from 'axios'
const Demo = defineComponent({
  components: {
    FullCalendar,
  },
  data() {
    return {
      calendarOptions: {
        plugins: [
          dayGridPlugin,
          timeGridPlugin,
          interactionPlugin // needed for dateClick
        ],
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        initialView: 'dayGridMonth',
        initialEvents: INITIAL_EVENTS, // alternatively, use the `events` setting to fetch from a feed
        editable: true,
        selectable: true,
        selectMirror: true,
        dayMaxEvents: true,
        weekends: true,
        select: this.handleDateSelect,
        eventClick: this.handleEventClick,
        eventsSet: this.handleEvents
        /* you can update a remote database when these fire:
        eventAdd:
        eventChange:
        eventRemove:
        */
      } as CalendarOptions,
      currentEvents: [] as EventApi[],
    }
  },
  methods: {
    // cadastrar(){
    //   axios.post('/calendar/cadastrar', {
    //       'date' : this.startStr,
    //       'title': this.title,
    //   }).then((data) => {
    //     // console.log(data)
    //     this.event.getAllEvents();
    //     this.$emit('close');
    //     // alert("mandei saporra: " + data.data.message)
    //   }).catch((erro) => {
    //     console.error(erro)
    //     alert("erro: " + erro.titulo + erro.message)
    //   })
    // },
      
    handleWeekendsToggle() {
      this.calendarOptions.weekends = !this.calendarOptions.weekends // update a property
    },
    allEvents() {
      let newArray = this.currentEvents.map((event)=>{
        return ({
          title: event.title,
          date: event.startStr,
        })
      })
      console.log(newArray)
    },
    handleDateSelect(selectInfo: DateSelectArg) {
      let title = prompt('Por favor digite um Evento')
      let calendarApi = selectInfo.view.calendar
      calendarApi.unselect() // clear date selection
      if (title) {
        calendarApi.addEvent({
          id: createEventId(),
          title,
          start: selectInfo.startStr,
          end: selectInfo.endStr,
          allDay: selectInfo.allDay
        })
      }
      axios.post('/calendar/cadastrar', {
          'date' : selectInfo.startStr,
          'title': title,
      }).then((data) => {
        // console.log(data)
        this.event.cadastrarevents();
        // alert("mandei saporra: " + data.data.message)
      }).catch((erro) => {
      })
      let newArray = this.currentEvents.map((event)=>{
        return ({
          title: event.title,
          date: event.startStr,
        })
      })
      
      console.log(newArray)
    },
    handleEventClick(clickInfo: EventClickArg) {
      if (confirm(`Tem certeza que deseja deletar o evento? '${clickInfo.event.title}'`)) {
        clickInfo.event.remove()
      }
    },
    handleEvents(events: EventApi[]) {
      this.currentEvents = events
    },
  }
})
export default Demo
</script>

<template>
  <div class='demo-app'>
    <!-- <div class='demo-app-sidebar'>
      <div class='demo-app-sidebar-section'>
        <h2>Todos os eventos({{ currentEvents.length }})</h2>
        <ul>
          <li v-for='event in currentEvents' :key='event.id'>
            <b>{{ event.startStr }}</b>
            <i>{{ event.title }}</i>
          </li>
        </ul>
      </div>
    </div> -->
      </div>
    <div class='demo-app-main'>
      <FullCalendar
        class='demo-app-calendar'
        :options='calendarOptions'
      >
        <template v-slot:eventContent='arg'>
          <b>{{ arg.timeText }}</b>
          <i>{{ arg.event.title }}</i>
        </template>
      </FullCalendar>
    </div>
</template>

<style lang='css'>
body {
  background-color: white;
}
h2 {
  margin: 0;
  font-size: 16px;
}
ul {
  margin: 0;
  padding: 0 0 0 1.5em;
}
li {
  margin: 1.5em 0;
  padding: 0;
}
b { /* used for event dates/times */
  margin-right: 3px;
}
.demo-app {
  display: flex;
  min-height: 100%;
  font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  font-size: 14px;
  
}
.demo-app-sidebar {
  width: 200px;
  line-height: 1.5;
  background: #ffffff;
  border-right: 1px solid #ffffff;
}
.demo-app-sidebar-section {
  padding: 1em;
}
.demo-app-main {
  flex-grow: 1;
  padding: 3em;
}
.fc { /* the calendar root */
  max-width: 1200px;
  margin: 0 auto;
}
</style>
Footer
