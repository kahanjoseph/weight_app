import {DialogActions, DialogBody, DialogDescription, DialogTitle, Dialog} from "@/Components/catalyst/dialog.jsx";
import {Button} from "@/Components/catalyst/button.jsx";
import { Description, Field, FieldGroup, Fieldset, Label, Legend } from '@/components/catalyst/fieldset'
import { Input } from '@/components/catalyst/input'
import { Select } from '@/components/catalyst/select'
import { Text } from '@/components/catalyst/text'
import { Textarea } from '@/components/catalyst/textarea'

const Component = ({isOpen, setIsOpen, project}) => {
    return (
        <>
            <form action="/orders" method="POST">
                <Dialog open={isOpen} onClose={setIsOpen}>
                    <pre>{JSON.stringify(project, null, 2)}</pre>
                    <DialogTitle>Edit Project</DialogTitle>
                    <DialogDescription>
                        Update project details.
                    </DialogDescription>
                    <DialogBody>
                        <Fieldset>
                            <Legend>Shipping details</Legend>
                            <Text>Without this your odds of getting your order are low.</Text>
                            <FieldGroup>
                                <Field>
                                    <Label>Street address</Label>
                                    <Input name="street_address"/>
                                </Field>
                                <Field>
                                    <Label>Country</Label>
                                    <Select name="country">
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                        <option>United States</option>
                                    </Select>
                                    <Description>We currently only ship to North America.</Description>
                                </Field>
                                <Field>
                                    <Label>Delivery notes</Label>
                                    <Textarea name="notes"/>
                                    <Description>If you have a tiger, we'd like to know about it.</Description>
                                </Field>
                            </FieldGroup>
                        </Fieldset>
                    </DialogBody>
                    <DialogActions>
                        <Button plain onClick={() => setIsOpen(false)}>
                            Cancel
                        </Button>
                        <Button onClick={() => setIsOpen(false)}>Refund</Button>
                    </DialogActions>
                </Dialog>
            </form>


        </>
    )
}
export default Component
