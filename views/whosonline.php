<?php if (!defined('APPLICATION')) exit();
echo $this->Form->Open();
echo $this->Form->Errors();
?>
<h1><?php echo Gdn::Translate("Who's Online"); ?></h1>
      <div class="Info"><?php echo Gdn::Translate('Where should the plugin be shown?'); ?></div>
      <table class="AltRows">
         <thead>
            <tr>
               <th><?php echo Gdn::Translate('Sections'); ?></th>
               <th class="Alt"><?php echo Gdn::Translate('Description'); ?></th>
            </tr>
         </thead>
         <tbody>
               <tr>
                  <th><?php
                     echo $this->Form->Radio('WhosOnline.Location.Show', "Every", array('value' => 'every', 'selected' => 'selected'));
                  ?></th>
                  <td class="Alt"><?php echo Gdn::Translate("This will show the panel on every page."); ?></td>
               </tr>
                <tr>
                     <th><?php
                        echo $this->Form->Radio('WhosOnline.Location.Show', "Discussion", array('value' => "discussion"));
                     ?></th>
                     <td class="Alt"><?php echo Gdn::Translate("This show the plugin on only selected discussion pages"); ?></td>
                </tr>
         </tbody>
      </table>
			<table class="AltRows">  
         <tbody>
               <tr>
                  <th><?php
                     echo $this->Form->Checkbox('WhosOnline.Hide', "Hide for non members of the site");
                  ?></th>
               </tr>             
         </tbody>
      </table>
      <table class="AltRows">
         <thead>
            <tr>
               <th><?php echo Gdn::Translate('Frequency'); ?></th>
               <th class="Alt"><?php echo Gdn::Translate('In seconds'); ?></th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th><?php echo Gdn::Translate('Rate of refresh'); ?></th>
               <td class="Alt"><?php echo $this->Form->TextBox('WhosOnline.Frequency'); ?></td>
            </tr>
         </tbody>
      </table>

<?php echo $this->Form->Close('Save');
