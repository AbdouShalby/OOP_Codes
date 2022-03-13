<?php

/*
 * Visibility Markers
 *
 * PUBLIC: It Can Be Called In Any Scope. This Means That A Public Property Of An Object Can Be Both Retrieved And Modified From Anywhere In A Program -- In The Class, A Subclass, Or Form Outside The Class, For Example. This Level Is The Default Behavior When Visibility Is Not Declared Because Of Backward-Compatibility Concerns With PHP4, Which Did Not Have Visibility.
 *
 * PROTECTED: Protected Properties And Methods Can Be Accessed From Inside The Class They Are Declared, Or In Any Class That Extends Them. They Can't Be Accessed From Outside The Class Or Subclass.
 *
 * PRIVATE: A Private Property Or Method Can't Be Accessed By A Subclass Of The Class It Is Defined In. If You Have A Class With A Protected Property And A Private Property And Then Extend That Class In The Subclass, You Can Access The Protected Property, But Not The Private Property.
 */