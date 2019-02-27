import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HelooComponent } from './heloo.component';

describe('HelooComponent', () => {
  let component: HelooComponent;
  let fixture: ComponentFixture<HelooComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HelooComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HelooComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
