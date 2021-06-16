import { Component, OnInit } from '@angular/core';
import { HomeComponent } from '../home/home.component';
import { AuthService } from 'src/app/services/auth/auth.service';
import { UserService } from 'src/app/services/user.service';
import { DataService } from 'src/app/services/data.service';
import { MatTableDataSource } from '@angular/material/table';
import { Router } from '@angular/router';
import { Gymkana } from 'src/app/models/Gymkana';
@Component({
  selector: 'app-inscriptions',
  templateUrl: './inscriptions.component.html',
  styleUrls: ['../home/home.component.html', './inscriptions.component.scss']
})
export class InscriptionsComponent extends HomeComponent implements OnInit {
  gymkanas:Gymkana[]=[];
  dataSource = new MatTableDataSource<Gymkana>([]);
  displayedColumns:string[] = ['observations', 'description', 'start_date', 'finish_date', 'actions'];
  constructor(
    public authService:AuthService,
    public userService:UserService,
    public dataService:DataService,
    private router:Router,
  ) {
    super(authService, userService);
   }

  ngOnInit(): void {
    this.createTable()
  }

  createTable(){
    this.dataService.getAllFutureGymkanas().subscribe(res => {
      this.gymkanas = res;
      this.dataSource = new MatTableDataSource<Gymkana>(this.gymkanas);
    });
  }

  signUp(element:Gymkana){
    this.router.navigate([`/single-inscription/${element.id}`]);
  }
}
