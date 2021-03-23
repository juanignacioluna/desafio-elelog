import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-hora',
  templateUrl: './hora.component.html',
  styleUrls: ['./hora.component.css']
})
export class HoraComponent implements OnInit {

	@Input() hoy: Date;

	constructor() { }

	ngOnInit(): void {
	}

}
